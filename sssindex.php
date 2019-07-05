<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
// Подключение файла скриптов
$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/template.js');
// Подключение файла стилей
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/template.css');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSS файл фреймворка Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Дополнительные темы Бутстрапа -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/templates/mycustomtemplate/css/template.css"> -->

    <jdoc:include type="head" />
</head>

<body>
    <div id='wrap'>
        <div class="container-fluid">
            <div id="header">

                <div class="row">
                    <div class="hd-top">
                        <div class="hd-top-container">
                            <div class="logo-img" col-md-6>
                                <img src="<?php echo $this->baseurl . 'templates/'. $this->template . '/images/flame.png'?>"
                                    alt="so turn the lights out">
                            </div>
                            <div class="logo-txt">
                                <p>
                                    Bonfire
                                </p>
                            </div>
                            <div class="logo-slogan">
                                <p>
                                    so turn the lights out
                                </p>
                            </div>
                            <div class="hd-user-menu">
                                <jdoc:include type="modules" name="position-0" style="xhtml" />
                                <li><a href="#">Wish List (0)</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                            </div>
                            <div class="hd-cart-btn">
                                <jdoc:include type="modules" name="position-1" style="xhtml" />

                                <div class="cart-btn">
                                    <a href="#"><img src="/templates/mycustomtemplate/images/cart.png"
                                            alt="cart.png"></a>
                                </div>
                                <div class="cart-counter">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="hd-main">
                        <div class="hd-main-menu">
                            <jdoc:include type="modules" name="position-2" style="xhtml" />
                            <li class="HomeIcon">
                                <a href="#"><img src="/templates/mycustomtemplate/images/HomeIcon.png"
                                        alt="HomeIcon.png"></a>
                            </li>
                            <li><a href="#">Desktops</a></li>
                            <li class="hd-drop-down-active">
                                <a href="#">
                                    Laptops & Notebooks
                                </a>
                                <ul class="hd-drop-down-menu">
                                    <li><a href="#">Sony(2)</a></li>
                                    <li><a href="#">Android(4)</a></li>
                                    <li><a href="#">Apple(7)</a></li>
                                    <li><a href="#">Acer(53)</a></li>
                                    <li><a href="#">HP(78)</a></li>
                                    <li><a href="#">Intel(5)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Tablents</a></li>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Phons & PDAs</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Contacts</a></li>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="hd-footer">
                        <div class="hd-footer-wrap">
                            <div class="hd-footer-content">
                                <jdoc:include type="modules" name="position-3" style="xhtml" />
                                <p>Welcome visitor you can login or create an account.</p>
                            </div>
                            <div class="socnetwork-icon">
                                <jdoc:include type="modules" name="position-4" style="xhtml" />
                                <a href="#"><img src="/templates/mycustomtemplate/images/SocialIcons.png" alt=""></a>
                            </div>
                            <div class="currency-selection">
                                <jdoc:include type="modules" name="position-5" style="xhtml" />
                                <form action="" method="post">
                                    <select>
                                        <option disabled>Выберите валюту</option>
                                        <option value="USD">UAH</option>
                                        <option selected value="UAH">Dollars</option>
                                        <option value="EURO">EURO</option>
                                        <option value="LYRA">LYRA</option>
                                    </select>

                                </form>
                            </div>
                            <div class="search-field">
                                <jdoc:include type="modules" name="position-6" style="xhtml" />
                                <form action="">
                                    <input type="search" name="" placeholder="Search">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="content">
                <div id="baner">
                    <div class="baner-top">
                        <a href="#"><img src="/templates/mycustomtemplate/images/baner-img.png" alt=""></a>
                    </div>
                    <div class="baner-bottom">
                        <div class="baner-bottom-txt">
                            <span>Childish Gambino - Camp Now Available for just $9.99</span>
                        </div>
                        <div class="baner-bottom-btn">
                            <a href="#">Purchase</a>
                        </div>

                    </div>
                </div>
                <div id="featured">
                    <p> Информационный блок 1 </p>
                </div>
                <div id="brands">
                    <p> Информационный блок 2 </p>
                </div>
                <div id="latest">
                    <p> Информационный блок 3 </p>
                </div>
            </div>
        </div>
        <div id="footer">
            <p> Футер </p>
        </div>
    </div>

    <!-- Библиотека jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous">
    </script>
    <!-- Сжатый JavaScript для бутстрапа -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>