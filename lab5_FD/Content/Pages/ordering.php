    <div class="container-fluid px-0 popup-shadow d-flex justify-content-center">
        <div class="popup d-flex flex-column align-items-center py-md-4 py-2">
            <form action="." class="popup-cross">
                <button name="page" value="<?= strip_tags($_REQUEST['page'])?>">
                    <img src="View/media/close-w.svg" alt="cross">
                </button>
            </form>
            <h2 class="popup-title order mb-md-3 mt-md-3 mb-1 mt-3">
                Registration of a prayer
            </h2>
            <form action="." method="POST">
            <div class="popup-body container-fluid p-0 d-flex flex-column align-items-center">
                <div class="ordering-container">
                    <div class="order-section active">
                        <div class="order-section-title d-flex">
                            <div class="order-section-number">
                                <span class="d-flex justify-content-center align-items-center mt-md-3 mt-2">
                                    1
                                </span>
                            </div>
                            <h3 class="order-section-name">
                                Personal info
                            </h3>
                        </div>
                        
                        <div class="order-section-body d-flex ">
                            <span class="order-section-line">
                    
                            </span>
                            <div class="order-section-content pb-md-4 pb-2">
                                <div class="ms-md-5 ms-3">
                                    <p class="order-text mb-0 mt-1">fill in the fields:</p>
                                    <div class="container-fluid p-0 d-flex flex-md-row flex-column justify-content-between">
                                        <div class="order-input medium mt-4">
                                            <p class="order-input-name">
                                                Your name
                                            </p>
                                            <input type="text" name="name">
                                        </div>
                                        <div class="order-input medium mt-4">
                                            <p class="order-input-name">
                                                Phone number
                                            </p>
                                            <input type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="container-fluid p-0 d-flex flex-wrap justify-content-between">
                                        <div class="order-input small mt-4">
                                            <p class="order-input-name">
                                                Street
                                            </p>
                                            <label>
                                                <input type="text" name="street">
                                            </label>
                                        </div>
                                        <div class="order-input small mt-4">
                                            <p class="order-input-name">
                                                House
                                            </p>
                                            <label>
                                                <input type="text" name="house">
                                            </label>
                                        </div>
                                        <div class="order-input small mt-4">
                                            <p class="order-input-name">
                                                Flat
                                            </p>
                                            <label>
                                                <input type="text" name="flat">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section active">
                        <div class="order-section-title d-flex">
                            <div class="order-section-number">
                                <span class="d-flex justify-content-center align-items-center mt-md-3 mt-2">
                                    1
                                </span>
                            </div>
                            <h3 class="order-section-name">
                                Pay
                            </h3>
                        </div>
                        <div class="order-section-body d-flex">
                            <span class="order-section-line">

                            </span>
                            <div  class="order-section-content pb-4 ">
                                <div class="payment-container ms-md-5 ms-3 d-flex flex-column align-items-center">
                                    <p class="order-text mt-1">
                                        For pay: <b class="ms-2">$1</b>
                                    </p>
                                    <p class="order-text mt-0">Enter card details:</p>
                                    <div class="debit-card p-4">
                                        <div class="d-flex flex-md-row flex-column align-items-center justify-content-between">
                                            <label for="cardId" class="card-input-title">Card number:</label>
                                            <input class="debit-card-input" type="number" id="cardId1" name="card_number" placeholder="XXXX XXXX XXXX XXXX">
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div class="d-flex">
                                                <label for="cardId" class="card-input-title me-2">Validity:</label>
                                                <input class = "debit-card-input small" type="number" id="cardId2" name="validity" placeholder="/">
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <label for="cardId" class="card-input-title me-2">CVV:</label>
                                                <input class = "debit-card-input small" type="number" id="cardId3" name="cvv" placeholder="XXX">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-md-row flex-column align-items-center justify-content-between mt-3 mt-md-4">
                                            <label for="cardId" class="card-input-title">Owner:</label>
                                            <input class = "debit-card-input" type="text" id="cardId4" name="owner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section active">
                        <div class="order-section-title d-flex">
                            <div class="order-section-number">
                                <span class="d-flex justify-content-center align-items-center mt-md-3 mt-2">
                                    3
                                </span>
                            </div>
                            <h3 class="order-section-name">
                                Secondary
                            </h3>
                        </div>
                        
                        <div class="order-section-body d-flex">
                            <span class="order-section-line">
                    
                            </span>
                            <div  class="order-section-content pb-4">
                                <div class="ms-md-5 ms-3">
                                    <div class="container-fluid mt-3 p-0 d-flex flex-column align-items-center">
                                        <p class="order-text mt-1">Add a comment (optional):</p>
                                        <div class="order-input large mt-2">
                                            <p class="order-input-name">
                                                Comment
                                            </p>
                                            <input type="text" name="comment">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $error ?>
                <input type="hidden" name="page" value="basket">
                <button class="d-block order-btn header-btn mt-4" type="submit">
                    Pay
                </button>
            </div>
            </form>
        </div>
    </div>
