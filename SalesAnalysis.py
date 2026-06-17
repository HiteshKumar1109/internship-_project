from tkinter import *
from tkinter import ttk, messagebox
import sqlite3 as sq
import pandas as pd
import matplotlib.pyplot as plt
from matplotlib.backends.backend_tkagg import FigureCanvasTkAgg

class SalesAnalysisClass:
    def __init__(self, root):
        self.root = root
        self.root.geometry("1100x600+220+130")
        self.root.title("Sales Analysis Dashboard")
        self.root.config(bg="#f4f6f8")
        self.root.focus_force()

        # Title
        title = Label(self.root, text="Sales Analysis Dashboard", font=("Segoe UI", 24, "bold"), bg="#2c3e50", fg="white", pady=10)
        title.pack(fill=X)

        # Left Control Frame
        control_frame = Frame(self.root, bg="white", bd=2, relief=RIDGE)
        control_frame.place(x=10, y=80, width=300, height=500)

        Label(control_frame, text="View Charts", font=("Segoe UI", 16, "bold"), bg="white", fg="#2c3e50").pack(pady=20)

        btn_sales_by_date = Button(control_frame, text="Sales by Date", command=self.plot_sales_by_date, font=("Segoe UI", 12, "bold"), bg="#3498db", fg="white", cursor="hand2", bd=0)
        btn_sales_by_date.pack(fill=X, padx=20, pady=10, ipady=5)

        btn_top_products = Button(control_frame, text="Top Products", command=self.plot_top_products, font=("Segoe UI", 12, "bold"), bg="#e67e22", fg="white", cursor="hand2", bd=0)
        btn_top_products.pack(fill=X, padx=20, pady=10, ipady=5)
        
        btn_combined = Button(control_frame, text="Full Dashboard", command=self.plot_combined, font=("Segoe UI", 12, "bold"), bg="#9b59b6", fg="white", cursor="hand2", bd=0)
        btn_combined.pack(fill=X, padx=20, pady=10, ipady=5)
        
        btn_show_data = Button(control_frame, text="Show All Data", command=self.show_sales_table, font=("Segoe UI", 12, "bold"), bg="#27ae60", fg="white", cursor="hand2", bd=0)
        btn_show_data.pack(fill=X, padx=20, pady=10, ipady=5)

        # Right Chart Frame
        self.chart_frame = Frame(self.root, bg="white", bd=2, relief=RIDGE)
        self.chart_frame.place(x=320, y=80, width=760, height=500)
        
        self.placeholder_label = Label(self.chart_frame, text="Select an analysis from the left", font=("Segoe UI", 16), bg="white", fg="grey")
        self.placeholder_label.pack(expand=True)

    def fetch_data(self):
        con = sq.connect(database="company.db")
        df = pd.read_sql_query("SELECT * FROM sales", con)
        con.close()
        return df

    def clear_chart(self):
        for widget in self.chart_frame.winfo_children():
            widget.destroy()

    def plot_sales_by_date(self):
        self.clear_chart()
        try:
            df = self.fetch_data()
            if df.empty:
                messagebox.showinfo("No Data", "No sales records found.")
                return
            
            df['date'] = pd.to_datetime(df['date'])
            sales_by_date = df.groupby('date')['total'].sum().reset_index()

            fig, ax = plt.subplots(figsize=(7, 4))
            ax.plot(sales_by_date['date'], sales_by_date['total'], marker='o', linestyle='-', color='#3498db')
            ax.set_title("Total Sales Trend", fontsize=14, fontweight='bold')
            ax.set_xlabel("Date")
            ax.set_ylabel("Total Revenue")
            plt.xticks(rotation=45)
            plt.tight_layout()

            canvas = FigureCanvasTkAgg(fig, master=self.chart_frame)
            canvas.draw()
            canvas.get_tk_widget().pack(fill=BOTH, expand=True)
        except Exception as ex:
            messagebox.showerror("Error", f"Could not generate chart: {str(ex)}")

    def plot_top_products(self):
        self.clear_chart()
        try:
            df = self.fetch_data()
            if df.empty:
                messagebox.showinfo("No Data", "No sales records found.")
                return
            
            top_products = df.groupby('product_name')['qty'].sum().sort_values(ascending=False).head(5)

            fig, ax = plt.subplots(figsize=(7, 4))
            top_products.plot(kind='bar', color='#e67e22', ax=ax)
            ax.set_title("Top 5 Products by Quantity", fontsize=14, fontweight='bold')
            ax.set_xlabel("Product Name")
            ax.set_ylabel("Total Quantity Sold")
            plt.xticks(rotation=45)
            plt.tight_layout()

            canvas = FigureCanvasTkAgg(fig, master=self.chart_frame)
            canvas.draw()
            canvas.get_tk_widget().pack(fill=BOTH, expand=True)
        except Exception as ex:
            messagebox.showerror("Error", f"Could not generate chart: {str(ex)}")

    def show_sales_table(self):
        self.clear_chart()
        try:
            df = self.fetch_data()
            if df.empty:
                messagebox.showinfo("No Data", "No sales records found.")
                return

            # Treeview
            scrolly = Scrollbar(self.chart_frame, orient=VERTICAL)
            scrollx = Scrollbar(self.chart_frame, orient=HORIZONTAL)

            table = ttk.Treeview(self.chart_frame, columns=list(df.columns), xscrollcommand=scrollx.set, yscrollcommand=scrolly.set)
            scrollx.pack(side=BOTTOM, fill=X)
            scrolly.pack(side=RIGHT, fill=Y)
            scrollx.config(command=table.xview)
            scrolly.config(command=table.yview)

            for col in df.columns:
                table.heading(col, text=col)
                table.column(col, width=100)
            
            table["show"] = "headings"
            
            for index, row in df.iterrows():
                table.insert('', END, values=list(row))
            
            table.pack(fill=BOTH, expand=1)
        except Exception as ex:
            messagebox.showerror("Error", f"Could not display table: {str(ex)}")
    def plot_combined(self):
        self.clear_chart()
        try:
            df = self.fetch_data()
            if df.empty:
                messagebox.showinfo("No Data", "No sales records found.")
                return

            fig, (ax1, ax2) = plt.subplots(2, 1, figsize=(7, 8))
            
            # Subplot 1: Sales by Date
            df['date'] = pd.to_datetime(df['date'])
            sales_by_date = df.groupby('date')['total'].sum().reset_index()
            ax1.plot(sales_by_date['date'], sales_by_date['total'], marker='o', linestyle='-', color='#3498db')
            ax1.set_title("Total Sales Trend", fontsize=12, fontweight='bold')
            ax1.set_ylabel("Revenue")
            ax1.tick_params(axis='x', rotation=30)

            # Subplot 2: Top Products
            top_products = df.groupby('product_name')['qty'].sum().sort_values(ascending=False).head(5)
            top_products.plot(kind='bar', color='#e67e22', ax=ax2)
            ax2.set_title("Top 5 Products", fontsize=12, fontweight='bold')
            ax2.set_ylabel("Qty Sold")
            ax2.tick_params(axis='x', rotation=30)

            plt.tight_layout()

            canvas = FigureCanvasTkAgg(fig, master=self.chart_frame)
            canvas.draw()
            canvas.get_tk_widget().pack(fill=BOTH, expand=True)
            
        except Exception as ex:
            messagebox.showerror("Error", f"Could not generate combined charts: {str(ex)}")

if __name__ == "__main__":
    root = Tk()
    obj = SalesAnalysisClass(root)
    root.mainloop()
