  <?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
    <div class="type-150" >
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="navbar-header">
                                <button class="navbar-toggle " type="button" data-toggle="collapse" data-target=".js-navbar-collapse" style="background-color: #2c3547">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse js-navbar-collapse">
                                <ul class="nav navbar-nav">
                          
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"> Home <b class="caret"></b> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="#"><i class="fa fa-caret-right pull-right visible-desktop"></i> Color Themes</a>
                                                <ul class="dropdown-menu">
                                                    <li class="active"><a href="#">Default Theme</a></li>
                                                    <li><a href="#">Grass Green Theme</a></li>
                                                    <li><a href="#">Oil Green Theme</a></li>
                                                    <li><a href="#">Gray Theme</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#"><i class="fa fa-caret-right pull-right visible-desktop"></i> Boxed Version</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Boxed - solid color background</a></li>
                                                    <li><a href="#">Boxed - pattern background</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> 
                         
                                    <li class="dropdown dropdown-supermenu">
                                        <a href="#" class="dropdown-toggle"> Shop <b class="caret"></b> </a>
                                        <ul class="dropdown-menu supermenu accepts-5">
                                            <li class="row">
                                                <div class="col-md-4">
                                                    <div class="col-4">
                                                        <ul class="nav nav-pills nav-stacked">
                                                            <li><a href="#">Grid View</a></li>
                                                            <li><a href="#">List View</a></li>
                                                            <li><a href="#">Full Width</a></li>
                                                            <li><a href="#">Single Product</a></li>
                                                            <li><a href="#">Search Results</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="col-8">
                                                        <div ><img src="images/woman.jpg" alt="q"></div>
                                                        <h5><span class="light">Awesome</span> Video</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                 
                                    <li class="dropdown dropdown-megamenu">
                                        <a href="#" class="dropdown-toggle"> Megamenu <b class="caret"></b> </a>
                                        <ul class="dropdown-menu megamenu container fix-mg"> 
                                            <li class="row"> 
                                                <div class="col-md-3">
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Swimwear</a></li>
                                                        <li><a href="#">Trousers</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Eros Condimentum</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Tincidunt Vel</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Est Feugiat</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Tincidunt Ac</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Lorem Adipiscing</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li><a href="#">Felis Sit</a></li>
                                                    </ul>
                                                    <ul class="nav unstyled">
                                                        <li><a href="#">Evening Tops</a></li>
                                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                                        <li><a href="#">Tunics</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#"><img src="images/woman.jpg" alt="woman in red" ></a>
                                                    <h5><span class="light">Featured</span> Category</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quas illo sapiente ratione nihil ut.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="row visible-desktop">
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                            </li>
                                            <li class="row visible-desktop">
                                                <div class="col-md-6">
                                                    New arrivals in: &nbsp;
                                                    <a href="#" class="btn btn-mini">Clothing</a>
                                                    <a href="#" class="btn btn-mini">Shoes</a>
                                                    <a href="#" class="btn btn-mini">Accessories</a>
                                                    <a href="#" class="btn btn-mini btn-warning">Back in stock</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pull-right ">
                                                        Outlet / Sale: &nbsp;
                                                        <a href="#" class="btn btn-mini btn-success">UP TO -70%</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                          
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Blog <b class="caret"></b> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Default Layout</a></li>
                                            <li><a href="#">Single Post</a></li>
                                            <li><a href="#">Search Results</a></li>
                                            <li><a href="#">404 Page</a></li>
                                        </ul>
                                    </li>
                         
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Features <b class="caret"></b> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Icons</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle"><i class="fa fa-caret-right pull-right visible-desktop"></i> All Features</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Headings</a></li>
                                                    <li><a href="#">Alert Boxes</a></li>
                                                    <li><a href="#">Tabs</a></li>
                                                    <li><a href="#">Buttons</a></li>
                                                    <li><a href="#">Toggles</a></li>
                                                    <li><a href="#">Quotes</a></li>
                                                    <li><a href="#">Gallery Grids</a></li>
                                                    <li><a href="#">Code</a></li>
                                                    <li><a href="#">Columns</a></li>
                                                    <li><a href="#">Maps</a></li>
                                                    <li><a href="#">Progress Bars</a></li>
                                                    <li><a href="#">Tables</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                          
                                    <li><a href="#">About Us</a></li>
                              
                                    <li><a href="#">Contact</a></li>
                                </ul>
                                <form class="formsearch">
                                    <input type="text" name="search" >
                                    <span class="fa fa-search icon-s"></span>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="cart-container" >
                                <div class="cart">
                                    <p class="items">CART <span class="dark-clr">(1)</span></p>
                                    <p class="dark-clr ">$1816.90</p>
                                    <a href="#" class="btn btn-danger">

                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="open-panel">
                                    <div class="item-in-cart clearfix">
                                        <div class="image">
                                            <img src="images/cart-item-1.png" width="124" height="124" alt="cart item">
                                        </div>
                                        <div class="desc">
                                            <strong><a href="#">Adipiscing Vel Vel Felis</a></strong>
                                            <span class="light-clr qty">
                                                Qty: 1
                                                &nbsp;
                                                <a href="#" class="fa fa-remove-sign" title="Remove Item"></a>
                                            </span>
                                        </div>
                                        <div class="price">
                                            <strong>$5914</strong>
                                        </div>
                                    </div>

                                    <div class="summary">
                                        <div class="deline">
                                            <div >
                                                <div class="col-md-6 san">Shipping:</div>
                                                <div class="col-md-6 san align-right">$4.99</div>
                                            </div>
                                        </div>
                                        <div class="line">
                                            <div >
                                                <div class="col-md-6 san">Subtotal:</div>
                                                <div class="col-md-6 san align-right ">$357.81</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="proceed">
                                        <a href="#" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="fa fa-shopping-cart"></i></a>
                                        <small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    </div>
                </div>
            </nav>
        </div>