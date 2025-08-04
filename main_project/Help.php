<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
    <div class="row g-4">
        
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-4">Common <span class="text-primary">FAQs</span></h4>
                    <div class="accordion" id="faqAccordion">
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a1">
                                    How do I book a trip on GHOOMOIndia?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Visit our homepage, enter your destination, select your dates, and choose your
                                    preferred travel and accommodation options. Complete the payment to confirm your
                                    booking.
                                </div>
                            </div>
                        </div>
                      
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a2">
                                    How can I check my booking status?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Log in to your GHOOMOIndia account and go to “My Bookings.” All your current and
                                    past bookings will be listed here with their status updates.
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a3">
                                    Can I modify or cancel my booking?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most bookings can be modified or cancelled from the “My Bookings” section, subject
                                    to the supplier’s policy. Please check your booking details for specific terms.
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a4">
                                    What payment options do you accept?
                                </button>
                            </h2>
                            <div id="a4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept all major credit/debit cards, UPI, net banking, and select wallets.
                                    Payments are secured with industry-leading encryption.
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a5">
                                    How do I contact GHOOMOIndia customer support?
                                </button>
                            </h2>
                            <div id="a5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can reach us at support@ghoomoindia.com, call 1800-123-4567 (Toll-Free), or use
                                    live chat via our website.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="col-lg-6">
           
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Didn't Find Your <span class="text-primary">Answer</span>?</h4>
                    <form id="faqForm">
                        <div class="mb-3">
                            <label for="faqSelect" class="form-label">Choose a question:</label>
                            <select class="form-select" id="faqSelect" name="faq">
                                <option value="" selected>Select your question</option>
                                <option value="insurance">Is travel insurance required or recommended?</option>
                                <option value="multiple">Can I book multiple destinations in a single trip?</option>
                                <option value="secure">How do I know my payment is secure?</option>
                                <option value="refund">What is your refund and cancellation policy?</option>
                                <option value="discount">Can I get a group booking or family discount?</option>
                                <option value="other">My question is not listed</option>
                            </select>
                        </div>
                       
                        <div id="faqAnswer" class="alert alert-info d-none"></div>
                    </form>
                </div>
            </div>
          
            <div id="contactForm" class="card d-none">
                <div class="card-body">
                    <h4>Contact Support</h4>
                    <form method="post" action="include/datafunction.php">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="question" class="form-control" rows="4"
                                placeholder="Describe your question or issue" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="contact">Submit</button>
                    </form>
                </div>
            </div>
            <div class="card border-primary shadow-sm mt-4">
                <div class="card-body text-center">
                    <h4 class="card-title mb-3 text-primary">Contact Details</h4>
                    <p class="mb-1">
                        <i class="fa fa-map-marker me-2"></i>
                        192, D-Block, Vaishali Nagar, Jaipur, Rajasthan(India) 302012
                    </p>
                    <p class="mb-1">
                        <i class="fa fa-envelope me-2"></i>
                        support@ghoomoindia.com | info@ghoomoindia.com
                    </p>
                    <p class="mb-0">
                        <i class="fa fa-phone me-2"></i>
                        +91 0000-000-000 | +91 0000-000-000
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const faqAnswers = {
        insurance: "While not mandatory, we highly recommend travel insurance for unexpected events like trip cancellations, medical emergencies, or lost luggage.",
        multiple: "No, right now the option to book multiple destinations in a single trip is not available. Each booking must be made separately.",
        secure: "All payments on GHOOMOIndia are processed through secure gateways with SSL encryption. We do not store your payment details.",
        refund: "Our refund policy varies by supplier. Generally, cancellations made within 24 hours of booking are eligible for a full refund. For cancellations after that, please refer to the specific terms in your booking confirmation.",
        booking: "Visit our homepage, enter your destination, select your dates, and choose your preferred travel and accommodation options. Complete the payment to confirm your booking.",
        status: "Log in to your GHOOMOIndia account and go to “My Bookings.” All your current and past bookings will be listed here with their status updates.",
        modify: "Most bookings can be modified or cancelled from the “My Bookings” section, subject to the supplier’s policy. Please check your booking details for specific terms.",
        payment: "We accept all major credit/debit cards, UPI, net banking, and select wallets. Payments are secured with industry-leading encryption.",
        support: "You can reach us at support@ghoomoindia.com, call 1800-123-4567 (Toll-Free), or use live chat via our website.",
    };

    $('#faqSelect').on('change', function () {
        const val = $(this).val();
        if (faqAnswers[val]) {
            $('#faqAnswer').text(faqAnswers[val]).removeClass('d-none');
            $('#contactForm').addClass('d-none');
        } else if (val === "other") {
            $('#faqAnswer').addClass('d-none');
            $('#contactForm').removeClass('d-none');
        } else {
            $('#faqAnswer').addClass('d-none');
            $('#contactForm').addClass('d-none');
        }
    });

</script>