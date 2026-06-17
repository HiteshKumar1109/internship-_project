import sqlite3

def create_db():
    con = sqlite3.connect(database="company.db")
    cur = con.cursor()
    
    # Employee Table
    cur.execute("""
        CREATE TABLE IF NOT EXISTS employee(
            eid TEXT PRIMARY KEY,
            name TEXT,
            email TEXT,
            gender TEXT,
            contact TEXT,
            dob TEXT,
            join_date TEXT,
            salary TEXT,
            education TEXT,
            department TEXT,
            designation TEXT,
            address TEXT
        )
    """)
    
    # Supplier Table
    cur.execute("""
        CREATE TABLE IF NOT EXISTS supplier(
            invoice TEXT PRIMARY KEY,
            name TEXT,
            contact TEXT,
            desc TEXT
        )
    """)
    
    # Category Table
    cur.execute("""
        CREATE TABLE IF NOT EXISTS category(
            cid INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT
        )
    """)
    
    # Product Table
    cur.execute("""
        CREATE TABLE IF NOT EXISTS product(
            pid INTEGER PRIMARY KEY AUTOINCREMENT,
            Category TEXT,
            Supplier TEXT,
            name TEXT,
            price TEXT,
            qty TEXT,
            status TEXT
        )
    """)

    # Sales Table
    cur.execute("""
        CREATE TABLE IF NOT EXISTS sales(
            sid INTEGER PRIMARY KEY AUTOINCREMENT,
            invoice TEXT,
            date TEXT,
            product_name TEXT,
            price REAL,
            qty INTEGER,
            total REAL
        )
    """)
    
    # --- INSERTING 20 DUMMY RECORDS FOR EACH TABLE ---

    # 1. Employees (20)
    cur.execute("SELECT COUNT(*) FROM employee")
    if cur.fetchone()[0] == 0:
        employees = [(f"EMP{i:03d}", f"Employee {i}", f"emp{i}@gmail.com", "Male" if i%2==0 else "Female", f"9876543{i:03d}", "1990-01-01", "2023-01-01", "50000", "B.Tech", "IT", "Engineer", "Delhi") for i in range(1, 21)]
        cur.executemany("INSERT INTO employee VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", employees)

    # 2. Suppliers (20)
    cur.execute("SELECT COUNT(*) FROM supplier")
    if cur.fetchone()[0] == 0:
        suppliers = [(f"INV-{i:03d}", f"Supplier {i}", f"9988776{i:03d}", f"Supplier {i} Description") for i in range(1, 21)]
        cur.executemany("INSERT INTO supplier VALUES (?,?,?,?)", suppliers)

    # 3. Categories (20)
    cur.execute("SELECT COUNT(*) FROM category")
    if cur.fetchone()[0] == 0:
        categories = [(f"Category {i}",) for i in range(1, 21)]
        cur.executemany("INSERT INTO category (name) VALUES (?)", categories)

    # 4. Products (20)
    cur.execute("SELECT COUNT(*) FROM product")
    if cur.fetchone()[0] == 0:
        products = [(f"Category {i}", f"Supplier {i}", f"Product {i}", f"{1000+i*100}", f"{10+i}", "Active") for i in range(1, 21)]
        cur.executemany("INSERT INTO product (Category, Supplier, name, price, qty, status) VALUES (?,?,?,?,?,?)", products)

    # 5. Sales (20)
    cur.execute("SELECT COUNT(*) FROM sales")
    if cur.fetchone()[0] == 0:
        import datetime
        sales = []
        for i in range(1, 21):
            date = (datetime.date(2026, 6, 1) + datetime.timedelta(days=i-1)).strftime("%Y-%m-%d")
            price = 1000 + i*50
            qty = i % 5 + 1
            sales.append((f"SAL-{i:03d}", date, f"Product {i}", price, qty, price*qty))
        cur.executemany("INSERT INTO sales (invoice, date, product_name, price, qty, total) VALUES (?,?,?,?,?,?)", sales)

    con.commit()
    con.close()

if __name__ == "__main__":
    create_db()
    print("Database re-initialized with 20 records each!")