<?php

session_start();

if($_SESSION["status"] != true){

    header("Location: login.php");
}

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("project", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "id");
        echo "<script>alert('Product added in the cart..!')</script>";
            echo "<script>window.location = 'cart.php'</script>";

        if(in_array($_POST['id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'cart.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'id' => $_POST['id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'id' => $_POST['id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect($server,$user,$password,$db);
if(!$con) {
    echo "Connection Unsuccessful";
}


if(isset($_POST['submit'])){

     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $inquiry = mysqli_real_escape_string($con, $_POST['inquiry']);
     $message = mysqli_real_escape_string($con, $_POST['message']);
     

    
     
     
         
            $insertquery = "insert into query( name, email, inquiry, message ) 
             values('$name','$email','$inquiry','$message')";
             

             $iquery = mysqli_query($con, $insertquery);

             if($iquery){
                ?>
                <script>
                    alert(" done");
                </script>
             <?php
             }
             else {
                 ?>
                     <script>
                         alert(" Please try again.");
                     </script>
                  <?php   
          } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAND-DOLLAR-SHELLING</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->

</head>
<body bgcolor="black">
    <header class="tm-site-header">
        
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary"><img src="img/logo.jpg" alt="Image" height=40px width="60px"/> SAND-DOLLAR-SHELLING</span></h1>

    </header>

     <header class="tm-site-header1" style="margin-left:80%;">
	
	
    <a href="cart.php"><button style="font-size:20px;background-color: rgb(37, 122, 179);height:50px;width: 130px;cursor:pointer; color:yellow;font-weight: bold;"><i class="fas fa-shopping-cart"></i> Cart : <?php

if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
}

?></button></a>
         <a href="indexmain.php"><button  style="font-size:20px;background-color: rgb(37, 122, 179);height:50px;width: 120px;cursor:pointer; color:yellow;font-weight: bold;">LogOut <i class="fas fa-sign-out-alt"></i></button></a>   
    </header>
         


    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#intro" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Introduction
                        <i class="fas fa-3x fa-water"></i>
                    </a>                
                </li>
                <li class="tm-nav-item">
                    <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Our Sources
                        <i class="far fa-3x fa-smile"></i>
                    </a>
                </li>
		        <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
                        Our Products
                        <i class="far fa-3x fa-images"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#about" data-effect="mfp-move-from-top" class="tm-nav-link">
                        About Us
                        <i class="fas fa-3x fa-tint"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#contact" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Contact Us
                        <i class="far fa-3x fa-comments"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Popup itself -->
        <div id="intro" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-intro1-row">
                <img src="img/intro1.jpg" alt="Image" class="tm-intro1-img">
                <div class="tm-col tm-bg-white tm-intro-pad">
                    <h2 class="tm-color-primary tm-page-title">Introducing Sea Vibes</h2>
                    <div class="tm-row tm-content-row">
                        <div class="tm-col-6 tm-intro-col-l">
                            <p style="text-align: justify;">
                                The phrase “the Seven Seas” has been around for centuries, but that term really 
				                refers to different parts of the ocean and several other large bodies of water. 
			                    There are actually more than seven seas in the world. But what makes a sea different 
				                from other bodies of water?
			
                            </p>
                            <p style="text-align: justify;">
                                That is not an easy question to answer, because the definition of a sea leaves some room for interpretation.
                                In general, a sea is defined as a portion of the ocean that is partly surrounded by land. Given that definition, 
                                there are about 50 seas around the world. But that number includes water bodies not always thought of as seas, such 
                                as the Gulf of Mexico and the Hudson Bay. 
                           </p>
                            <p style="text-align: justify;">
                                Moreover, in some cases, a sea is completely landlocked. The Caspian Sea is the most famous example, 
				                though this sea, which lies between Russia and Iran, is also referred to as the world’s largest lake. 
		                		Other seas surrounded by land include the Aral Sea and the Dead Sea. They contain saltwater and have 
				                been called seas for many years, but many oceanographers and geographers are more inclined to call them lakes.
                            </p>
			  	    
                        </div>
                        <div class="tm-col-6">
				            <p style="text-align: justify;">
                                A sea can also be very warm for most of the year. The Red Sea, for instance, has an average temperature of around 30 degrees 
				                Celsius (86 degrees Fahrenheit). It is also the saltiest sea, containing 41 parts of salt per 1,000 parts of seawater. 
				                Seas can be quite cold, too. The Greenland Sea, for instance, has surface water that hovers near the freezing mark most of the year.
                            </p>
                            
                            
                            <p style="text-align: justify;">
                                The variety of the sizes, temperatures, and locations of the Earth’s seas also means that the marine ecosystems 
				                within each sea can vary greatly from one to the other. The Baltic Sea in Scandinavia is the world’s youngest 
				                sea having formed between 10 thousand and 15 thousand years ago from glacial erosion. It contains a unique mixture of saltwater
				                and freshwater, making it the largest brackish water body on the planet. As a result, the Baltic Sea contains a small, but rare, 
				                variety of freshwater and saltwater plants and animals that have been able to adapt to their brackish environment.
                            </p>
			   
                            <div class="tm-text-center">
                                <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-next">
                                    Next Page
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>                
            </div> 
        </div>

        <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray" >
            <a href="#" class="tm-close-popup" >
                Home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-gallery-row" >
                <div class="tm-gallery" style="overflow:scroll">
                    
                   <div class="tm-gallery-container">
                   <?php require_once ("php/header.php"); ?>
        <div class="" >
            <div class="" style="display:flex;flex-wrap: wrap;padding:10px;">
                <?php
                  $result = $database->getData();
                  while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                  }
                ?>
        </div>
</div>
                   </div>
                </div>
                <!-- Gallery navigation and description -->
                <div class="tm-col tm-gallery-right">
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">Our Products</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links" style="color: grey;">
                            
                            <li>
                        
                                    <i class="fa fa-circle tm-gallery-link-icon"></i>
                                    Ornaments
                                
                            </li>
                            <li>
                                
                                <i class="fa fa-circle tm-gallery-link-icon"></i>
                                    Mollusks Shells
                            </li>
                            <li>
                                
                                    <i class="fa fa-circle tm-gallery-link-icon"></i>
                                    Arthropods
                                
                            </li>
                            <li>
                                
                                    <i class="fa fa-circle tm-gallery-link-icon tm-gallery-link"></i>
                                    Brachiopods
                                
                            </li>
                        </ul>
                        <p>
                            <h4>Why Should One Buy SeaShells?</h4>
                        </p>
                        <p>
                            Sea shells also provide relief from stress and offer a protective shield. 
                            Shells are also a symbol of good communication, positive and healthy relationships and prosperity.  
                            <ul style="color: grey;">
                                <li>For strengthening marital relations</li>
                                <li>For protecting your home</li>
                                <li>For good luck</li>
                                <li>For a stable career</li>
                                <li>For greater wealth</li>
                            </ul>           
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-testimonials-inner">
                <h2 class="tm-color-primary tm-mt-35 tm-page-title">Our Sources</h2>
                <div class="tm-row tm-testimonial-row">                
                    <div class="tm-col tm-testimonial-col">
                        <h4>PURI SEA BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Puri Beach or the Golden beach is a beach in the city of Puri in the state of Odisha, 
                            India. It is on the shore of the Bay of Bengal. It is known for being a tourist attraction and a 
                            Hindu sacred place. The beach is the site of the annual Puri Beach Festival, which is co-sponsored by 
                            the Indian Ministry of Tourism, the city of Odisha, the Development Commissioner of Handicrafts, and the Eastern Zonal 
                            Cultural Center, Kolkata. The beach hosts sand art displays, including work by international award-winning local sand 
                            artist Sudarshan Pattnaik.
                        </p>
                        <h4>PARADISE BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Paradise Beach or Plage Paradiso as it is known, is a popular tourist destination of Chunnambar. 
                            This Pondicherry beach got its name because of the peaceful experience it offers to its visitors. 
                            To access this beach, you need to take a boat ride from the town of Pondicherry. This is also one of
                            the reasons why the beach got its current identity. This isolated beach of Pondicherry is a great weekend
                            respite to enjoy with your family, friends, and relatives.
                        </p>
                        <h4>ROCK BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Rock Beach is one of Pondicherry's best-kept and most popular beaches. There is a rock beach as well
                            as a sandy area where one can walk right up to the water. Only pedestrians are permitted on the beach;
                            No vehicular traffic is permitted. We had a wonderful walk on the road which is parallel to the beach 
                            and is an approximately 1.2-kilometer-long road that starts at the war memorial and ends at Dupleix Park 
                            on Goubert Avenue. We also saw the French war memorial, the Chief Secretariat, the Mahatma Gandhi statue, the old harbor, 
                            and the old pier. We had a pleasant experience while we sitting on the rocks and relaxing. A visit is certainly worthwhile.
                        </p>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <img src="img/testimonial-01.jpg" alt="Image" class="tm-mb-30">
                        <img src="img/testimonial-02.jpg" alt="Image" class="tm-mb-30">
                        <img src="img/testimonial-03.jpg" alt="Image" class="tm-mb-30">
                        <img src="img/testimonial-04.jpg" alt="Image" class="tm-mb-30">
                        <img src="img/testimonial-05.jpg" alt="Image" class="tm-mb-30">                        
                                                 
                        <div class="tm-text-center">
                            <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact">
                                Contact Us
                            </a>
                        </div>                 
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <h4>JUHU BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Juhu Beach in Mumbai is among the famous beaches of India. It faces the Arabian Sea, and it’s the longest beach in Mumbai.
                            The place is known for its street food stalls, the soothing views of the sunset and also, for encounters with celebrities.
                            The beach is a favourite among the film-makers and you can find photo sessions and video shoots going on now and then. 
                            And if you visit Juhu Beach early in the morning, you might catch up with the celebrities while they’re jogging or having 
                            coconut water there. Juhu Beach is in a posh area and many actors and actresses stay in the locality.
                        </p>
                        <h4>PANAMBUR BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Panambur Beach is a beach in the city of Mangalore in the Indian state of Karnataka.This beach is on the shores of 
                            Arabian sea and is credited as one of the safest and best maintained beaches of India.It is the most popular, 
                            well connected and the most visited beach of Karnataka.The beach is located in the place called Panambur 10 km north of the
                            City center which comes under the administration of Mangalore City Corporation. This beach has been popular for its sunsets, 
                            the port area and a picnic spot for tourists and locals alike and offers views of the sunset. 
                            The beach attracts visitors due to its close proximity to the city. The ships anchored out in the sea waiting for berth in the harbor
                            can be seen from the Beach.
                        </p>
                        <h4>DIGHA BEACH</h4>
                        <p style="text-align: justify;margin-top: -20px;">                            
                            Digha is the most popular sea beach in West Bengal. It is located 187 km south-west of Kolkata. 
                            The scenic beauty of this place is charming and alluring. The beach is girdled with casuarinas plantations along 
                            the coast which enhances its beauty. Apart from beautification these trees also help in reducing erosion of the dunes. 
                            One can enjoy both the sunrise and sunset at the Digha sea beach. 
                        </p>
                    </div>
                </div>
            </div>            
        </div>

        <div id="about" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Home
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-color-primary tm-about-col tm-mb-40 tm-page-title">About Sea Shell</h2>
            <div class="tm-row tm-about-row">
                <div class="tm-col tm-about-col tm-about-left" style="text-align: justify;">                    
                    <img src="img/about.jpg" alt="Image" class="tm-mb-30">
                    <p class="tm-mb-40" style="color:black;">
                        A seashell is a hard, protective exoskeleton formed by invertebrate animals who live in the 
			sea and are often found washed up on beaches throughout the world. The most common animals which produce a seashell 
			are mollusks, crabs, oysters, barnacles, brachiopods, annelid worms, and sea urchins. While most seashells are external, 
			some species (e.g., cephalopods) exhibit internal seashells. Since the seashell is a part of the animal, empty shells signify 
			that the animal has died by natural causes or has been consumed by another animal. Seashells are comprised of calcium carbonate and a 
			small quantity of protein.
                    </p>
                    <p class="tm-mb-40">
 			<h3><u>Formation of Sea Shell</u></h3>
                        Seashells are typically formed in distinct layers via the extracellular secretion of proteins which are then 
			covered by calcium carbonate. Therefore, the shell grows from the bottom upwards, with the constant secretion of 
			new material at the margin between the animal and the shell. The tissue responsible for shell formation is called the mantle. 
			The mantle resides at the interface between the body of the animal and the shell. As the animal grows, the shell also grows and 
			becomes increasingly strong, to accommodate the larger size of the animal and provide adequate protection. There are three distinct 
			layers of the shell produced by the mantle:
			<ol type="1">
				<li>Outer Proteinaceous Periosteum</li>
				<li>Prismatic Layer</li>
				<li>Inner Pearly Layer</li>
			</ol>
                    </p>
                </div>
                <div class="tm-col tm-about-col" style="text-align: justify;margin-top:-50px;">
                    <p class="tm-mb-40" style="text-align: justify;">
                        <h3>Outer Proteinaceous Periosteum</h3>
			The outer proteinaceous periosteum is the non-calcified layer on the outer surface of the shell. 
			It is composed of a thin, hard layer of dark protein which serves to protect the edge of the shell as it grows. 
			This layer also provides the structural foundation on which the subsequent layers can be built and allows for the 
			accumulation of calcium ions, which promotes crystallization.
                    </p>
                    <p class="tm-mb-40" >
                        <h3>Prismatic Layer</h3>
			The prismatic layer forms the middle layer of the shell, which is comprised of a hard, prismatic calcium
                        carbonate which exhibits a chalky appearance. The prismatic and the periosteum layers are formed by the same specialized mantle cells.
                    </p>
                    <p class="tm-mb-40" >
                        <h3>Inner Pearly Layer</h3>
			The inner pearly layer is also calcified, but is a pearly lamellar substance which is formed by the epithelial
                        cells of the mantle surface. Nacre is also referred to as “Mother of Pearl” and is known for its exceptional strength. 
                        Nacre is formed by the “brick-like” arrangement of calcium carbonate sheets interspersed with biopolymers which provides 
                        the shell with elasticity, strength, and resistance to cracking.
		   </p>
		   <p class="tm-mb-40">
 			<h3><u>Types of Seashells</u></h3>
                        There are a wide variety of seashells, each distinguished by the species from which they are derived.
			By far the most common types of seashell encountered on beaches are those produced by mollusks. In addition to mollusks, 
			various other species produce seashells, including sea urchins, corals, arthropods, and brachiopods. Each can be distinguished by their
		        characteristic morphology.
			<ol type="a">
				<li>Mollusk Shells</li>
				<li>Arthropods</li>
				<li>Annelids</li>
				<li>Brachiopods</li>
				<li>Sea Urchins</li>
				<li>Corals</li>
				<li>Coccolithophore</li>
			</ol>
                    </p>
                    <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact tm-mb-40">
                        Contact Us
                    </a>
                </div>               
            </div>
        </div>

        <div id="contact" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Home
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">Contact Us</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">
                
                <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->
                    
                    <form id="contact-form" action="" method="POST" class="tm-contact-form" onsubmit="return validate()">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="order">Order Related</option>
                                <option value="product">Product Related </option>
                                <option value="payment">Payment Related</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required></textarea>
                        </div>

                        <div class="form-group tm-text-right">
                            <input type="submit" value="Send It Now" class="tm-btn tm-btn-primary" name="submit" id="submit" />
                        </div>
</form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    <div class="mapouter tm-mb-40">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" 
			scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15557.626416146326!2d77.65436632696593!3d12.881555854638899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5363206885f325%3A0xaedaf9f59b42f221!2sRock%20Beach!5e0!3m2!1sen!2sin!4v1660153050104!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade;
			height=400&amp;hl=en&amp;q=bangalore&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
			</iframe>
			<a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a>
			</div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas 
			{overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
                    </div>

                    <!-- Address -->
                    <address class="tm-mb-40">
                        #256 Private Organisation, ABC Road<br>
                        Bangalore 560078
                    </address>

                    <!-- Links -->
                    <ul class="tm-contact-links">
                        <li>
                            <a href="tel:0100200340">
                                <i class="fas fa-phone tm-contact-link-icon"></i>
                                Mob: 9005846237
                            </a>
                        </li>
                        <li>
                            <a href="mailto:sunandasadhukhan1@gmail.com">
                                <i class="fas fa-at tm-contact-link-icon"></i>
                                Email: contact@sanddollarshelling.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.company.com">
                                <i class="fas fa-link tm-contact-link-icon"></i>
                                URL: www.sand_dollar_shelling.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="tm-footer">
        <span>Copyright &copy; 2022 SAND-DOLLAR-SHELLING</span>
        <span >
            CONNECT WITH US 
            <a href="https://www.facebook.com/marketplace/item/2248908731951371/"><i class="fa fa-facebook" style="margin: 15px;"></i></a>
            <a href="https://www.instagram.com/_sea.shell_2001/"><i class="fa fa-instagram" style="margin: 15px;"></i></a>
            <a href="https://twitter.com/magioliveira?s=20&t=Gcsr1wcONcbxOhQ-NcfzKg"><i class="fa fa-twitter" style="margin: 15px;"></i></a>
            <a href=" mailto:sunandasadhukhan674@gmail.com"><i class="fa fa-google-plus" style="margin: 15px;"></i></a>
            <a href="https://youtu.be/HOiZrWtQ4Hg"><i class="fa fa-youtube-play" ></i></a>
        </span>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
</body>
</html>        
<p style="font-family: ExtraOrnamentalNo2 Font;">