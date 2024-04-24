<!DOCTYPE html>
<html lang="en">
    <head>

        <title>JS Projects | CodeRafa</title>
        <link rel="stylesheet" href="JSProjectsStyle.css">
        <script type="text/javascript" src="JSProjectPack.js"></script>

        <?php
            include 'Include.php';
            HTMLHeadTags();
        ?>

    </head>
    <body>
        <?php
            IncludeHeader();   
            //GridSystem();

            // Links selection on left-column-layout
            $HomeClassLink        = "link-not-selected";
            $CarouselClassLink    = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>JS PROJECTS <i style="color:#f0db4f;" class="fa-brands fa-js"></i></h1>
                    <p class="DefaultText">&emsp;This page Javascript projects contains a compilation of JS solutions to add dynamism to the website</p>
                EOT;
            }
            if($p=='Carousel') {

                $CarouselClassLink = "link-selected";

                // Main Title
                echo <<< EOT
                    <h1>JavaScript Carousels</h1>
                    <p class="DefaultText">&emsp;Carousel models using JS.</p>
                EOT;

                // ---------------------------------- Products Slider ------------------------------------ //
                echo <<< EOT
                    <div class="default-layout-container">
                        <h2>Products Slider</h2>
                        <p>&emsp;Inspired by Nike landing page products slider.</p>
                        <div class="product-slider-container">
                            <div><span style="font-weight:bold;padding-left:10px;">News</span></div>
                            <div class="gallery-wrapper">
                                <div class="gallery">
                                    <div class="item current-item">
                                        <div class="product-block">
                                            <div style="background-image: url(https://imgnike-a.akamaihd.net/360x360/016692IM.jpg); height:360px; width:360px;"></div>
                                            <div>Title 1</div>
                                            <div>CTA 1</div>
                                        </div>
                                    </div>
                                    <div class="item current-item">
                                        <div class="product-block">
                                            <div style="background-image: url(https://imgnike-a.akamaihd.net/360x360/01274683.jpg); height:360px; width:360px;"></div>
                                            <div>Title 2</div>
                                            <div>CTA 2</div>
                                        </div>
                                    </div>
                                    <div class="item current-item">
                                        <div class="product-block">
                                            <div style="background-image: url(https://imgnike-a.akamaihd.net/360x360/0268025C.jpg); height:360px; width:360px;"></div>
                                            <div>Title 3</div>
                                            <div>CTA 3</div>
                                        </div>
                                    </div>
                                    <div class="item current-item">
                                        <div class="product-block">
                                            <div style="background-image: url(https://imgnike-a.akamaihd.net/360x360/02882351.jpg); height:360px; width:360px;"></div>
                                            <div>Title 4</div>
                                            <div>CTA 4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="left-arrow control" href="javascript:Slide(-1);"> ❮ </a>
                            <a class="right-arrow control" href="javascript:Slide(1);"> ❯ </a>

                        </div>
                    </div>
                EOT;

                
                // ---------------------------------- Pictures Carousel ------------------------------------ //     
                echo <<< EOT
                    <div class="default-layout-container">
                        <h2>Pictures Carousel</h2>
                        <p>&emsp;One example of pictures carousel. The images used are generated by <a class="on-text" href="https://unsplash.com/developers">Unsplash</a> image random link.</p>
                        <div style="padding: 20px;">
                            <div class="slideshow-container">
                                <div class="my-slides fade" style="display:block;">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="https://source.unsplash.com/random/700x300?sig=1" style="width:100%">
                                    <div class="text">Caption Slide 1</div>
                                </div>

                                <div class="my-slides fade">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="https://source.unsplash.com/random/700x300?sig=2" style="width:100%;border-radius:4px;">
                                    <div class="text">Caption Slide 2</div>
                                </div>

                                <div class="my-slides fade">
                                    <div class="numbertext">3 / 3</div>
                                    <img src="https://source.unsplash.com/random/700x300?sig=3" style="width:100%">
                                    <div class="text">Caption Slide 3</div>
                                </div>

                                <a class="prev T" onclick="NextSlide(-1)">❮</a>
                                <a class="next T" onclick="NextSlide(1)">❯</a>
                            </div>
                        </div>
                    </div>
                EOT;
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/JSProjects.php"><li>Home</li></a>
                            <a class="$CarouselClassLink" href="/JSProjects.php?p=Carousel"><li>Carousel</li></a>
                        </ul>
                    </div>
                </div>
            EOT;        
        ?>
    </body>
</html>
