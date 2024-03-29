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

                // ---------------------------------- Exec-Code Block 1 ------------------------------------ //

                $Exec = <<< EOT
                    <div class="slideshow-container">
                        <div class="my-slides fade" style="display:block;">
                            <div class="numbertext">1 / 3</div>
                            <img src="https://source.unsplash.com/random/700x300?sig=1" style="width:100%">
                            <div class="text">Caption Slide 1</div>
                        </div>

                        <div class="my-slides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="https://source.unsplash.com/random/700x300?sig=2" style="width:100%">
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
                EOT;

                $HtmlCode =<<< EOT

                    &lt;div class="slideshow-container"&gt;
                        &emsp;&emsp; &lt;div class="my-slides fade" style="display:block;"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="numbertext"&gt;1 / 3&lt;/div&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;img src="https://source.unsplash.com/random/700x300?sig=1" style="width:100%"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="text"&gt;Caption Slide 1&lt;/div&gt;
                        &emsp;&emsp; &lt;/div&gt;

                        &emsp;&emsp; &lt;div class="my-slides fade"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="numbertext"&gt;2 / 3&lt;/div&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;img src="https://source.unsplash.com/random/700x300?sig=2" style="width:100%"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="text"&gt;Caption Slide 2&lt;/div&gt;
                        &emsp;&emsp; &lt;/div&gt;

                        &emsp;&emsp; &lt;div class="my-slides fade"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="numbertext"&gt;3 / 3&lt;/div&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;img src="https://source.unsplash.com/random/700x300?sig=3" style="width:100%"&gt;
                            &emsp;&emsp;&emsp;&emsp; &lt;div class="text"&gt;Caption Slide 3&lt;/div&gt;
                        &emsp;&emsp; &lt;/div&gt;

                        &emsp;&emsp; &lt;a class="prev T" onclick="NextSlide(-1)"&gt; ❮ &lt;/a&gt;
                        &emsp;&emsp; &lt;a class="next T" onclick="NextSlide(1)"&gt; ❯ &lt;/a&gt;
                    &lt;/div&gt;

                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .slideshow-container {
                        &emsp;&emsp; max-width: 1000px;
                        &emsp;&emsp; position: relative;
                        &emsp;&emsp; margin: auto;
                    }
                    
                    <span class="Comment">/* Next and previous buttons */</span>
                    .prev,
                    .next {
                        &emsp;&emsp; cursor: pointer;
                        &emsp;&emsp; position: absolute;
                        &emsp;&emsp; top: 50%;
                        &emsp;&emsp; width: auto;
                        &emsp;&emsp; padding: 16px;
                        &emsp;&emsp; margin-top: -22px;
                        &emsp;&emsp; color: white;
                        &emsp;&emsp; font-weight: bold;
                        &emsp;&emsp; font-size: 18px;
                        &emsp;&emsp; border-radius: 0 4px 4px 0;
                        &emsp;&emsp; user-select: none;
                    }
                    
                    .my-slides {
                        &emsp;&emsp; display: none;
                    }
                    
                    <span class="Comment">/* Position the "next button" to the right */</span>
                    .next {
                        &emsp;&emsp; right: 0;
                        &emsp;&emsp; border-radius: 4px 0 0 4px;
                    }
                    
                    <span class="Comment">/* On hover, add a black background color with a little bit see-through */</span>
                    .prev:hover, .next:hover {
                        &emsp;&emsp; background-color: rgba(0,0,0,0.8);
                    }
                    
                    <span class="Comment">/* Caption text */</span>
                    .text {
                        &emsp;&emsp; color: #f2f2f2;
                        &emsp;&emsp; font-size: 15px;
                        &emsp;&emsp; padding: 10px;
                        &emsp;&emsp; position: absolute;
                        &emsp;&emsp; bottom: 8px;
                        &emsp;&emsp; width: 100%;
                        &emsp;&emsp; box-sizing: border-box;
                        &emsp;&emsp; text-align: center;
                    }
                    
                    <span class="Comment">/* Number text (1/3 etc) */</span>
                    .numbertext {
                        &emsp;&emsp; color: #f2f2f2;
                        &emsp;&emsp; font-size: 12px;
                        &emsp;&emsp; padding: 8px 12px;
                        &emsp;&emsp; position: absolute;
                        &emsp;&emsp; top: 0;
                    }
                    
                    .fade {
                        &emsp;&emsp; animation-name: fade;
                        &emsp;&emsp; animation-duration: 1.5s;
                    }
                    @keyframes fade {
                        &emsp;&emsp; from {
                            &emsp;&emsp;&emsp;&emsp; opacity: .4;
                        &emsp;&emsp; } 
                        &emsp;&emsp; to {
                            &emsp;&emsp;&emsp;&emsp; opacity: 1;
                        &emsp;&emsp; }
                    }
                    
                    @media (any-pointer: coarse) {
                        &emsp;&emsp; .prev,
                        &emsp;&emsp; .next,
                        &emsp;&emsp; .text {
                            &emsp;&emsp;&emsp;&emsp; font-size: 11px;
                        &emsp;&emsp; }
                    }
                EOT;
                $CSSCode = nl2br($CSSCode);

                $JSCode =<<< EOT
                    var SlideIndex = 1;
                    function NextSlide(n) {
                        &emsp;&emsp; ShowSlide(SlideIndex = SlideIndex + n);
                    }
                    
                    function ShowSlide(n) {
                    
                        &emsp;&emsp; var Slides = document.getElementsByClassName('my-slides');
                        &emsp;&emsp; var QtySlides = Slides.length;
                    
                        &emsp;&emsp; <span class="Comment">// Go back to the first frame</span>
                        &emsp;&emsp;    if( n > Slides.length ) {
                        &emsp;&emsp;        &emsp;&emsp; SlideIndex = 1;
                        &emsp;&emsp;    }
                        &emsp;&emsp;    <span class="Comment">// Go back to the last frame</span>
                        &emsp;&emsp;    if( n < 1) {
                        &emsp;&emsp;        &emsp;&emsp; SlideIndex = Slides.length;
                        &emsp;&emsp;    }
                        &emsp;&emsp;
                        &emsp;&emsp;    for(var i = 0 ; i < QtySlides ; i++) {
                        &emsp;&emsp;        &emsp;&emsp; Slides[i].style.display = "none";
                        &emsp;&emsp;   }
                        &emsp;&emsp;    Slides[SlideIndex-1].style.display = "block";
                    }
                EOT;
                $JSCode = nl2br($JSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS', 'JS');
                $aCode = array($HtmlCode, $CSSCode, $JSCode);
                $aContainersIDs = array('html-loading-0', 'css-loading-0', 'js-loading-0');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, 'horizontal');
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
