<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php') ?>
</head>
<body>
    <header class="header">
        <?php include("includes/nav.php") ?>
    </header>
    <section class="section-breadcumb">
        <!-- home/product/order -->
        <?php include("includes/breadcum.php") ?>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="checkout-section">
                <div class="payment-section">
                    <form action="" method="POST">
                        <div class="contact-information">
                            <h2>Contact information</h2>
                            <input type="text"name="name" placeholder="Enter your name">
                            <input type="tel" name="phone"placeholder="Enter your phone">
                            <input type="text" name="text" placeholder="Enter your post code">
                            <input type="text" name="address" placeholder="Enter your address">
                            <input type="text" name="city" placeholder="Your your city">
                            <select name="province">
                                <option value="ontario">Ontario</option>
                                <option value="manitoba">Manitoba</option>
                                <option value="british columbia">British Columbia</option>
                                <option value="quebec">Quebec</option>
                                <option value="alberta">Alberta</option>
                                <option value="saskatchewan">Saskatchewan</option>
                                <option value="newfoundland and labrador">Newfoundland and Labrador</option>
                                <option value="prince edward island">Prince Edward Island</option>
                                <option value="nova scotia">Nova Scotia</option>
                                <option value="nunavut">Nunavut</option>
                                <option value="northwest">Northwest</option>
                                <option value="yukon">Yukon</option>
                            </select>
                        </div>
                        <div class="card-information">
                            <h2>Card information</h2>
                            <input type="text" name="card-no" id="card-no" placeholder="4111-1111-1111-1111">
                            <input type="text" name="card-expiry-month" id="card-expiry-month" placeholder="MMM">
                            <input type="text" name="card-expiry-year" id="card-expiry-year" placeholder="YYYY">
                        </div>
                        <input type="submit" value="Checkout">
                    </form>
                </div>
                <div class="shoppingcart-section">
                    <table>
                        <tr>
                            <th><img src="images/product-1021.jpeg" alt="product image"></th>
                            <th><span class="title">Range Daypack</span></th>
                            <td><span class="title">$127.00</span></td>
                        </tr>
                        <tr>
                            <th><span class="title">Subtotal</span></th>
                            <th></th>
                            <td><span class="title">$127.00</span></td>
                        </tr>
                        <tr>
                            <th><span class="title">Tax</span></th>
                            <th></th>
                            <td><span class="title">$0</span></td>
                        </tr>
                        <tr>
                            <th><span class="title">Total</span></th>
                            <th></th>
                            <td><span class="currency">CAD</span><span  class="money">$127.00</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="back-btn">
                <a href="index.php"><i class="fa fa-long-arrow-left fa-sm"></i> Back to men</a>
            </div>
        </div>
    </section>
    <section class="divider">
    </section>
    <footer class="site-footer">
        <?php include('includes/footer.php') ?>
    </footer>
</body>
</html>
