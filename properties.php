<!DOCTYPE html><!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon May 22 2023 00:22:31 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="homezy.webflow.io" data-wf-page="63f4a1a2596f1aa29b03deee" data-wf-site="63dccc1ba88f450bf57ed4e1"
      data-wf-status="1">
<?php
include "./inc/head.php";
?>
<body>
<div data-w-id="3cc49a08-02d3-b728-f2b0-f033692a371b" data-animation="default" data-collapse="medium"
     data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container w-container">
        <?php
        include "./inc/navbar.php";
        ?>
    </div>
</div>
<div class="section first-section">
    <div class="container w-container">
        <div class="heading margin-s">
            <div class="heading-title"><h2 class="color-dark-100">Search Properties</h2></div>
        </div>
        <div data-w-id="e8bac7ac-e048-a58a-d463-91befe401b41" style="opacity:0" class="browse-property-forms-wrap">
            <div class="browse-form-wrap">
                <div class="form-block w-form">
                    <form id="wf-form-Browse-Form" name="wf-form-Browse-Form" data-name="Browse Form" method="get"
                          class="browse-form-group" data-wf-page-id="63f4a1a2596f1aa29b03deee"
                          data-wf-element-id="181da630-aece-a6b8-c354-297b2716727f">
                        <div class="browse-form-item">
                            <div class="browse-form-item-icon-wrap">
                                <div class="svg-icon _20x20 w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                              d="M17.1834 7.04158C16.3084 3.19158 12.9501 1.45825 10.0001 1.45825C10.0001 1.45825 10.0001 1.45825 9.99175 1.45825C7.05008 1.45825 3.68341 3.18325 2.80841 7.03325C1.83341 11.3333 4.46675 14.9749 6.85008 17.2666C7.73341 18.1166 8.86675 18.5416 10.0001 18.5416C11.1334 18.5416 12.2667 18.1166 13.1417 17.2666C15.5251 14.9749 18.1584 11.3416 17.1834 7.04158Z"
                                              fill="#191A23"/>
                                        <path d="M10 11.2166C11.4497 11.2166 12.625 10.0413 12.625 8.59155C12.625 7.14181 11.4497 5.96655 10 5.96655C8.55025 5.96655 7.375 7.14181 7.375 8.59155C7.375 10.0413 8.55025 11.2166 10 11.2166Z"
                                              fill="#191A23"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-s">Location</div>
                                <select id="Location" name="Location" data-name="Location" required=""
                                        class="raw-select-field w-select">
                                    <option value="California, US">California, US</option>
                                    <option value="London, UK">London, UK</option>
                                    <option value="Rome, Italia">Rome, Italia</option>
                                    <option value="Paris, France">Paris, France</option>
                                </select></div>
                        </div>
                        <div class="browse-form-item">
                            <div class="browse-form-item-icon-wrap">
                                <div class="svg-icon _20x20 w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                              d="M13.4915 1.66675H6.50817C3.47484 1.66675 1.6665 3.47508 1.6665 6.50842V13.4834C1.6665 16.5251 3.47484 18.3334 6.50817 18.3334H13.4832C16.5165 18.3334 18.3248 16.5251 18.3248 13.4918V6.50842C18.3332 3.47508 16.5248 1.66675 13.4915 1.66675Z"
                                              fill="#191A23"/>
                                        <path d="M11.8835 10L10.6251 9.55833V6.73333H10.9251C11.6001 6.73333 12.1501 7.325 12.1501 8.05C12.1501 8.39167 12.4335 8.675 12.7751 8.675C13.1168 8.675 13.4001 8.39167 13.4001 8.05C13.4001 6.63333 12.2918 5.48333 10.9251 5.48333H10.6251V5C10.6251 4.65833 10.3418 4.375 10.0001 4.375C9.65846 4.375 9.37513 4.65833 9.37513 5V5.48333H8.83346C7.60013 5.48333 6.5918 6.525 6.5918 7.8C6.5918 9.29167 7.45846 9.76667 8.1168 10L9.37513 10.4417V13.2583H9.07513C8.40013 13.2583 7.85013 12.6667 7.85013 11.9417C7.85013 11.6 7.5668 11.3167 7.22513 11.3167C6.88346 11.3167 6.60013 11.6 6.60013 11.9417C6.60013 13.3583 7.70846 14.5083 9.07513 14.5083H9.37513V15C9.37513 15.3417 9.65846 15.625 10.0001 15.625C10.3418 15.625 10.6251 15.3417 10.6251 15V14.5167H11.1668C12.4001 14.5167 13.4085 13.475 13.4085 12.2C13.4001 10.7 12.5335 10.225 11.8835 10ZM8.53346 8.825C8.10846 8.675 7.85013 8.53333 7.85013 7.80833C7.85013 7.21667 8.2918 6.74167 8.8418 6.74167H9.38346V9.125L8.53346 8.825ZM11.1668 13.2667H10.6251V10.8833L11.4668 11.175C11.8918 11.325 12.1501 11.4667 12.1501 12.1917C12.1501 12.7833 11.7085 13.2667 11.1668 13.2667Z"
                                              fill="#191A23"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-s">Price</div>
                                <select id="Price" name="Price" data-name="Price" required=""
                                        class="raw-select-field w-select">
                                    <option value="$1500-$2500">$1500-$2500</option>
                                    <option value="$2500-$5000">$2500-$5000</option>
                                    <option value="$5000-$8000">$5000-$8000</option>
                                    <option value="$8000+">$8000+</option>
                                </select></div>
                        </div>
                        <div class="browse-form-item">
                            <div class="browse-form-item-icon-wrap">
                                <div class="svg-icon _20x20 w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.3332 18.9583H1.6665C1.32484 18.9583 1.0415 18.6749 1.0415 18.3333C1.0415 17.9916 1.32484 17.7083 1.6665 17.7083H18.3332C18.6748 17.7083 18.9582 17.9916 18.9582 18.3333C18.9582 18.6749 18.6748 18.9583 18.3332 18.9583Z"
                                              fill="#191A23"/>
                                        <path opacity="0.4"
                                              d="M17.5002 8.31657V18.3333H2.4585L2.50016 8.30823C2.50016 7.79989 2.7335 7.3166 3.14183 6.99994L8.97516 2.4666C9.57516 1.9916 10.4252 1.9916 11.0252 2.4666L12.1418 3.33325L15.8335 6.19992L16.8585 6.99994C17.2668 7.3166 17.5002 7.7999 17.5002 8.31657Z"
                                              fill="#191A23"/>
                                        <path d="M10.8332 14.1667H9.1665C8.47484 14.1667 7.9165 14.7251 7.9165 15.4167V18.3334H12.0832V15.4167C12.0832 14.7251 11.5248 14.1667 10.8332 14.1667Z"
                                              fill="#191A23"/>
                                        <path d="M7.9165 11.4584H6.24984C5.7915 11.4584 5.4165 11.0834 5.4165 10.6251V9.37508C5.4165 8.91675 5.7915 8.54175 6.24984 8.54175H7.9165C8.37484 8.54175 8.74984 8.91675 8.74984 9.37508V10.6251C8.74984 11.0834 8.37484 11.4584 7.9165 11.4584Z"
                                              fill="#191A23"/>
                                        <path d="M13.75 11.4584H12.0833C11.625 11.4584 11.25 11.0834 11.25 10.6251V9.37508C11.25 8.91675 11.625 8.54175 12.0833 8.54175H13.75C14.2083 8.54175 14.5833 8.91675 14.5833 9.37508V10.6251C14.5833 11.0834 14.2083 11.4584 13.75 11.4584Z"
                                              fill="#191A23"/>
                                        <path d="M15.8333 6.19992L12.1416 3.33325H14.9833C15.4416 3.33325 15.8166 3.69991 15.8166 4.15824L15.8333 6.19992Z"
                                              fill="#191A23"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-s">Type of Property</div>
                                <select id="Category" name="Category" data-name="Category" required=""
                                        class="raw-select-field w-select">
                                    <option value="Office">Available</option>
                                    <option value="Apartment">Exited</option>
                                    <option value="Studio">Funded</option>

                                </select></div>
                        </div>
                        <div class="browse-form-cta-wrap"><a href="/properties-v1" class="button button-l w-button">Browse</a>
                        </div>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>

        </div>
        <div data-w-id="e8bac7ac-e048-a58a-d463-91befe401b65" style="opacity:0"
             class="w-layout-grid properties-map-grid vertical">

            <div>

                <div class="w-dyn-list">
                    <div role="list" class="search-result-grid w-dyn-items">

                        <div class="chakra-card">

                            <div class="chakra-card__body ">

                                <img alt="COVE"
                                     src="https://cribstock.s3.amazonaws.com/m1678552851251cribstock.jpeg"
                                     class="chakra-image css-1h7vu9x">

                                <div class="card-info">
                                    <div class="card-info-first">
                                        <p class="chakra-card-title css-ly0rhp">1 Bedroom in Burj khalifa</p>
                                        <p class="chakra-card-share css-0">$11.99/share</p>
                                    </div>


                                    <div class="card-details">
                                        <svg stroke="#1a202c" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             stroke-linecap="round" stroke-linejoin="round" height="13" width="13"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <p class="chakra-text main-text">Beach Pros resort, NC USA</p></div>
                                    <div class="card-details">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             aria-hidden="true" class="css-1ykfz6g" height="14" width="14"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="chakra-text main-text">Estimated to yield up to <span
                                                    class="chakra-text-green css-jx61ed">25%</span>
                                            annually.</p></div>

                                    <hr aria-orientation="horizontal" class="chakra-divider css-evmj4r">

                                    <div class="card-footer">
                                        <p class="chakra-text css-0">Total shares: 7000</p>
                                        <p class="chakra-text css-0">Shares sold: 3167</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="chakra-card">

                            <div class="chakra-card__body ">

                                <img alt="COVE"
                                     src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     class="chakra-image css-1h7vu9x">

                                <div class="card-info">
                                    <div class="card-info-first">
                                        <p class="chakra-card-title css-ly0rhp">Costa Blanca, luxury homes</p>
                                        <p class="chakra-card-share css-0">$111.99/share</p>
                                    </div>


                                    <div class="card-details">
                                        <svg stroke="#1a202c" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             stroke-linecap="round" stroke-linejoin="round" height="13" width="13"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <p class="chakra-text main-text">Guardamar del Segura, Spain</p></div>
                                    <div class="card-details">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             aria-hidden="true" class="css-1ykfz6g" height="14" width="14"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="chakra-text main-text">Estimated to yield up to <span
                                                    class="chakra-text-green css-jx61ed">25%</span>
                                            annually.</p></div>

                                    <hr aria-orientation="horizontal" class="chakra-divider css-evmj4r">

                                    <div class="card-footer">
                                        <p class="chakra-text css-0">Total shares: 7000</p>
                                        <p class="chakra-text css-0">Shares sold: 3167</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="chakra-card">
                            <div class="chakra-card-tag">
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.7em" viewBox="0 0 448 512">

                                    <path fill="#FF3C3C"
                                          d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/>
                                </svg>
                                <span>NEW</span>
                            </div>
                            <div class="chakra-card__body ">

                                <img alt="COVE"
                                     src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     class="chakra-image css-1h7vu9x">

                                <div class="card-info">
                                    <div class="card-info-first">
                                        <p class="chakra-card-title css-ly0rhp">Summer House</p>
                                        <p class="chakra-card-share css-0">$90.99/share</p>
                                    </div>


                                    <div class="card-details">
                                        <svg stroke="#1a202c" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             stroke-linecap="round" stroke-linejoin="round" height="13" width="13"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <p class="chakra-text main-text">Canon, EOS 5D Mark IV</p></div>
                                    <div class="card-details">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                             aria-hidden="true" class="css-1ykfz6g" height="14" width="14"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="chakra-text main-text">Estimated to yield up to <span
                                                    class="chakra-text-green css-jx61ed">15%</span>
                                            annually.</p></div>

                                    <hr aria-orientation="horizontal" class="chakra-divider css-evmj4r">

                                    <div class="card-footer">
                                        <p class="chakra-text css-0">Total shares: 7000</p>
                                        <p class="chakra-text css-0">Shares sold: 3167</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination search-result"><a href="#" class="pagination-button arrow w-inline-block">
                        <div class="svg-icon _24x24 w-embed">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 19.92L8.47997 13.4C7.70997 12.63 7.70997 11.37 8.47997 10.6L15 4.07996"
                                      stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a><a href="#" class="pagination-button active w-inline-block">
                        <div class="text-xl">1</div>
                    </a><a href="#" class="pagination-button w-inline-block">
                        <div class="text-xl">2</div>
                    </a><a href="#" class="pagination-button mobile-hidden w-inline-block">
                        <div class="text-xl">3</div>
                    </a><a href="#" class="pagination-button w-inline-block">
                        <div class="text-xl">...</div>
                    </a><a href="#" class="pagination-button w-inline-block">
                        <div class="text-xl">15</div>
                    </a><a href="#" class="pagination-button arrow w-inline-block">
                        <div class="svg-icon _24x24 w-embed">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90991 19.92L15.4299 13.4C16.1999 12.63 16.1999 11.37 15.4299 10.6L8.90991 4.07996"
                                      stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>
<?php
include_once './inc/footer.php'
?>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63dccc1ba88f450bf57ed4e1"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="uploads-ssl.webflow.com/63dccc1ba88f450bf57ed4e1/js/webflow.89be3d23c.js"
        type="text/javascript"></script>
</body>
</html>