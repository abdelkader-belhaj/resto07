<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_79e905d6dabfbbf1dbd1aad2989cda23 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyy' => [$this, 'block_bodyy'],
            'bodyspec' => [$this, 'block_bodyspec'],
            'bodyparties' => [$this, 'block_bodyparties'],
            'bodyTable' => [$this, 'block_bodyTable'],
            'bodyGallery' => [$this, 'block_bodyGallery'],
            'bodyChefs' => [$this, 'block_bodyChefs'],
            'bodyContact' => [$this, 'block_bodyContact'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - Delicious Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\"  rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy:wght@400&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\"  rel=\"stylesheet\">
  <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\"  rel=\"stylesheet\">
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <title>";
        // line 27
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        ";
        // line 28
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "    </head>
    


    <body class=\"index-page\">
     <header id=\"header\" class=\"header fixed-top\">

    <div class=\"topbar d-flex align-items-center\">
      <div class=\"container d-flex justify-content-end justify-content-md-between\">
        <div class=\"contact-info d-flex align-items-center\">
          <i class=\"bi bi-phone d-flex align-items-center d-none d-lg-block\"><span>+216 58069420</span></i>
          <i class=\"bi bi-clock ms-4 d-none d-lg-flex align-items-center\"><span>Mon-Sam: 11:00 AM - 23:00 PM</span></i>
        </div>
        <a href=\"#book-a-table\" class=\"cta-btn\">Réserver une table</a>
      </div>
    </div><!-- End Top Bar -->

    <div class=\"branding d-flex align-items-cente\">

      <div class=\"container position-relative d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
          <h1 class=\"sitename\">Délicieux</h1>
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
          <ul>
            <li><a href=\"#hero\" class=\"active\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#menu\">Menu</a></li>
            <li><a href=\"#specials\">Specials</a></li>
            <li><a href=\"#events\">Events</a></li>
            <li><a href=\"#chefs\">Chefs</a></li>
            <li><a href=\"#gallery\">Gallery</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
          <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
        </nav>

      </div>

    </div>

  </header>
  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-carousel/hero-carousel-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2><span>Délices</span> Resto</h2>
            <p>Bienvenue sur Délices Resto, votre plateforme dédiée aux amoureux de la bonne cuisine. Découvrez une variété de plats savoureux, commandez en quelques clics et profitez d’une expérience culinaire unique, chez vous ou sur place.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-carousel/hero-carousel-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>À vrai dire, nous assumons nos choix</h2>
            <p>>Dans les moments libres, lorsque tout nous est permis, rien ne nous empêche de réaliser ce qui nous passionne le plus. Chaque plaisir mérite d’être vécu pleinement, et chaque difficulté peut être surmontée avec détermination.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-carousel/hero-carousel-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Parfois, dans certaines circonstances</h2>
            <p>Il est des moments où la vie nous révèle ses vérités cachées. Nul ne cherche la douleur pour elle-même, mais parfois elle devient le chemin vers de grandes découvertes, portées par ceux qui suivent la voie de la passion et de la vérité.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>


      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section light-background\">

      <div class=\"container\">

        <div class=\"row gy-4\">
          <div class=\"col-lg-6 position-relative align-self-start\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/about.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
            <a href=\"https://www.youtube.com/watch?v=WW0SLuX8HsI\" class=\"glightbox pulsating-play-btn\"></a>
          </div>
          <div class=\"col-lg-6 content\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <h3>Un plaisir gourmand à partager</h3>
            <p class=\"fst-italic\">
              Découvrez une expérience culinaire unique, alliant saveurs authentiques et ambiance chaleureuse. 
              Chaque plat est préparé avec soin pour ravir vos papilles et sublimer vos moments partagés.
            </p>
            <ul>
              <li><i class=\"bi bi-check2-all\"></i> <span>Des ingrédients frais et de qualité, soigneusement sélectionnés.</span></li>
              <li><i class=\"bi bi-check2-all\"></i> <span>Un service attentionné pour une expérience sans faille.</span></li>
              <li><i class=\"bi bi-check2-all\"></i> <span>Des plats créatifs et équilibrés, adaptés à toutes vos envies.</span></li>
            </ul>
            <p>
              Que ce soit pour un dîner entre amis, un repas d’affaires ou une occasion spéciale, 
              laissez-vous tenter par notre savoir-faire et profitez d’un moment d’exception.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id=\"why-us\" class=\"why-us section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Pourquoi nous choisir</h2>
        <div><span>Pourquoi choisir</span> <span class=\"description-title\">Notre Cuisine</span></div>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"card-item\">
              <span>01</span>
              <h4><a href=\"\" class=\"stretched-link\">Cuisine de qualité</a></h4>
              <p>Nous sélectionnons les meilleurs ingrédients pour vous offrir des plats savoureux, 
              préparés avec soin par nos chefs passionnés.</p>
            </div>
          </div><!-- Card Item -->

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"card-item\">
              <span>02</span>
              <h4><a href=\"\" class=\"stretched-link\">Excellence garantie</a></h4>
              <p>Chaque plat est préparé avec passion et précision, pour vous offrir une expérience culinaire inoubliable, dans un cadre chaleureux et raffiné.</p>
            </div>
          </div><!-- Card Item -->

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"card-item\">
              <span>03</span>
              <h4><a href=\"\" class=\"stretched-link\">Un service sur mesure</a></h4>
              <p>Nous vous accueillons avec attention et bienveillance. Chaque détail est pensé pour répondre à vos attentes et vous faire passer un moment agréable.</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section -->

";
        // line 210
        yield from $this->unwrap()->yieldBlock('bodyy', $context, $blocks);
        // line 214
        yield "





   ";
        // line 220
        yield from $this->unwrap()->yieldBlock('bodyspec', $context, $blocks);
        // line 223
        yield "



";
        // line 227
        yield from $this->unwrap()->yieldBlock('bodyparties', $context, $blocks);
        // line 230
        yield "








";
        // line 239
        yield from $this->unwrap()->yieldBlock('bodyTable', $context, $blocks);
        // line 243
        yield "









   ";
        // line 253
        yield from $this->unwrap()->yieldBlock('bodyGallery', $context, $blocks);
        // line 256
        yield "













   










   ";
        // line 281
        yield from $this->unwrap()->yieldBlock('bodyChefs', $context, $blocks);
        // line 285
        yield "
    <!-- Testimonials Section -->
    <section id=\"testimonials\" class=\"testimonials section dark-background\">

      <img src=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials-bg.jpg"), "html", null, true);
        yield "\" class=\"testimonials-bg\" alt=\"\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"swiper init-swiper\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 5000
              },
              \"slidesPerView\": \"auto\",
              \"pagination\": {
                \"el\": \".swiper-pagination\",
                \"type\": \"bullets\",
                \"clickable\": true
              }
            }
          </script>
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/testimonials-1.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"Smiling man in a suit and tie facing forward with a confident and friendly expression, set against a softly blurred professional background\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/testimonials-2.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/testimonials-3.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/testimonials-4.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/testimonials-5.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class=\"description-title\">Contact</span></div>
      </div><!-- End Section Title -->

      <div class=\"mb-5\">
        <iframe style=\"width: 100%; height: 400px;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
      </div><!-- End Google Maps -->

      <div class=\"container\" data-aos=\"fade\">

        <div class=\"row gy-5 gx-lg-5\">

          <div class=\"col-lg-4\">

            <div class=\"info\">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-envelope flex-shrink-0\"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-phone flex-shrink-0\"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

         









";
        // line 460
        yield from $this->unwrap()->yieldBlock('bodyContact', $context, $blocks);
        // line 464
        yield "





        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">

    <div class=\"container\">
      <div class=\"row gy-3\">
        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-geo-alt icon\"></i>
          <div class=\"address\">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-telephone icon\"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-clock icon\"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <h4>Follow Us</h4>
          <div class=\"social-links d-flex\">
            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Delicious</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>







          <!-- Vendor JS Files -->
  <script src=\"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

  
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenue!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        yield "            ";
        // line 30
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyy"));

        // line 211
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 220
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyspec(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyspec"));

        // line 221
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyparties(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyparties"));

        // line 228
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyTable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyTable"));

        // line 240
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyGallery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyGallery"));

        // line 254
        yield "
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyChefs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyChefs"));

        // line 282
        yield "

   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 460
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyContact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContact"));

        // line 461
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  877 => 461,  867 => 460,  857 => 282,  847 => 281,  838 => 254,  828 => 253,  818 => 240,  808 => 239,  799 => 228,  789 => 227,  780 => 221,  770 => 220,  760 => 211,  750 => 210,  742 => 30,  740 => 29,  730 => 28,  713 => 27,  700 => 563,  694 => 560,  690 => 559,  686 => 558,  682 => 557,  678 => 556,  674 => 555,  670 => 554,  578 => 464,  576 => 460,  490 => 377,  471 => 361,  452 => 345,  433 => 329,  414 => 313,  387 => 289,  381 => 285,  379 => 281,  352 => 256,  350 => 253,  338 => 243,  336 => 239,  325 => 230,  323 => 227,  317 => 223,  315 => 220,  307 => 214,  305 => 210,  233 => 141,  197 => 108,  182 => 96,  167 => 84,  112 => 31,  110 => 28,  106 => 27,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  70 => 12,  66 => 11,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - Delicious Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\"  rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy:wght@400&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\"  rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\"  rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">

        <title>{% block title %}Bienvenue!{% endblock %}</title>
        {% block stylesheets %}
            {# ...vos feuilles de style ici... #}
        {% endblock %}
    </head>
    


    <body class=\"index-page\">
     <header id=\"header\" class=\"header fixed-top\">

    <div class=\"topbar d-flex align-items-center\">
      <div class=\"container d-flex justify-content-end justify-content-md-between\">
        <div class=\"contact-info d-flex align-items-center\">
          <i class=\"bi bi-phone d-flex align-items-center d-none d-lg-block\"><span>+216 58069420</span></i>
          <i class=\"bi bi-clock ms-4 d-none d-lg-flex align-items-center\"><span>Mon-Sam: 11:00 AM - 23:00 PM</span></i>
        </div>
        <a href=\"#book-a-table\" class=\"cta-btn\">Réserver une table</a>
      </div>
    </div><!-- End Top Bar -->

    <div class=\"branding d-flex align-items-cente\">

      <div class=\"container position-relative d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
          <h1 class=\"sitename\">Délicieux</h1>
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
          <ul>
            <li><a href=\"#hero\" class=\"active\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#menu\">Menu</a></li>
            <li><a href=\"#specials\">Specials</a></li>
            <li><a href=\"#events\">Events</a></li>
            <li><a href=\"#chefs\">Chefs</a></li>
            <li><a href=\"#gallery\">Gallery</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
          <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
        </nav>

      </div>

    </div>

  </header>
  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2><span>Délices</span> Resto</h2>
            <p>Bienvenue sur Délices Resto, votre plateforme dédiée aux amoureux de la bonne cuisine. Découvrez une variété de plats savoureux, commandez en quelques clics et profitez d’une expérience culinaire unique, chez vous ou sur place.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>À vrai dire, nous assumons nos choix</h2>
            <p>>Dans les moments libres, lorsque tout nous est permis, rien ne nous empêche de réaliser ce qui nous passionne le plus. Chaque plaisir mérite d’être vécu pleinement, et chaque difficulté peut être surmontée avec détermination.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Parfois, dans certaines circonstances</h2>
            <p>Il est des moments où la vie nous révèle ses vérités cachées. Nul ne cherche la douleur pour elle-même, mais parfois elle devient le chemin vers de grandes découvertes, portées par ceux qui suivent la voie de la passion et de la vérité.</p>
            <div>
              <a href=\"#menu\" class=\"btn-get-started\">Our Menu</a>
              <a href=\"#book-a-table\" class=\"btn-get-started\">Book a table</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>


      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section light-background\">

      <div class=\"container\">

        <div class=\"row gy-4\">
          <div class=\"col-lg-6 position-relative align-self-start\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <img src=\"{{ asset('assets/img/about.jpg') }}\" class=\"img-fluid\" alt=\"\">
            <a href=\"https://www.youtube.com/watch?v=WW0SLuX8HsI\" class=\"glightbox pulsating-play-btn\"></a>
          </div>
          <div class=\"col-lg-6 content\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <h3>Un plaisir gourmand à partager</h3>
            <p class=\"fst-italic\">
              Découvrez une expérience culinaire unique, alliant saveurs authentiques et ambiance chaleureuse. 
              Chaque plat est préparé avec soin pour ravir vos papilles et sublimer vos moments partagés.
            </p>
            <ul>
              <li><i class=\"bi bi-check2-all\"></i> <span>Des ingrédients frais et de qualité, soigneusement sélectionnés.</span></li>
              <li><i class=\"bi bi-check2-all\"></i> <span>Un service attentionné pour une expérience sans faille.</span></li>
              <li><i class=\"bi bi-check2-all\"></i> <span>Des plats créatifs et équilibrés, adaptés à toutes vos envies.</span></li>
            </ul>
            <p>
              Que ce soit pour un dîner entre amis, un repas d’affaires ou une occasion spéciale, 
              laissez-vous tenter par notre savoir-faire et profitez d’un moment d’exception.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id=\"why-us\" class=\"why-us section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Pourquoi nous choisir</h2>
        <div><span>Pourquoi choisir</span> <span class=\"description-title\">Notre Cuisine</span></div>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"card-item\">
              <span>01</span>
              <h4><a href=\"\" class=\"stretched-link\">Cuisine de qualité</a></h4>
              <p>Nous sélectionnons les meilleurs ingrédients pour vous offrir des plats savoureux, 
              préparés avec soin par nos chefs passionnés.</p>
            </div>
          </div><!-- Card Item -->

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"card-item\">
              <span>02</span>
              <h4><a href=\"\" class=\"stretched-link\">Excellence garantie</a></h4>
              <p>Chaque plat est préparé avec passion et précision, pour vous offrir une expérience culinaire inoubliable, dans un cadre chaleureux et raffiné.</p>
            </div>
          </div><!-- Card Item -->

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"card-item\">
              <span>03</span>
              <h4><a href=\"\" class=\"stretched-link\">Un service sur mesure</a></h4>
              <p>Nous vous accueillons avec attention et bienveillance. Chaque détail est pensé pour répondre à vos attentes et vous faire passer un moment agréable.</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section -->

{% block bodyy %}


{% endblock %}






   {% block bodyspec %}

{% endblock %}




{% block bodyparties %}

{% endblock %}









{% block bodyTable %}


{% endblock %}










   {% block bodyGallery %}

   {% endblock %}














   










   {% block bodyChefs %}


   {% endblock %}

    <!-- Testimonials Section -->
    <section id=\"testimonials\" class=\"testimonials section dark-background\">

      <img src=\"{{ asset('assets/img/testimonials-bg.jpg') }}\" class=\"testimonials-bg\" alt=\"\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"swiper init-swiper\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 5000
              },
              \"slidesPerView\": \"auto\",
              \"pagination\": {
                \"el\": \".swiper-pagination\",
                \"type\": \"bullets\",
                \"clickable\": true
              }
            }
          </script>
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{ asset('assets/img/testimonials/testimonials-1.jpg') }}\" class=\"testimonial-img\" alt=\"Smiling man in a suit and tie facing forward with a confident and friendly expression, set against a softly blurred professional background\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{ asset('assets/img/testimonials/testimonials-2.jpg') }}\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{ asset('assets/img/testimonials/testimonials-3.jpg') }}\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{ asset('assets/img/testimonials/testimonials-4.jpg') }}\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{ asset('assets/img/testimonials/testimonials-5.jpg') }}\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class=\"description-title\">Contact</span></div>
      </div><!-- End Section Title -->

      <div class=\"mb-5\">
        <iframe style=\"width: 100%; height: 400px;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
      </div><!-- End Google Maps -->

      <div class=\"container\" data-aos=\"fade\">

        <div class=\"row gy-5 gx-lg-5\">

          <div class=\"col-lg-4\">

            <div class=\"info\">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-envelope flex-shrink-0\"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-phone flex-shrink-0\"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

         









{% block bodyContact %}


{% endblock %}






        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">

    <div class=\"container\">
      <div class=\"row gy-3\">
        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-geo-alt icon\"></i>
          <div class=\"address\">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-telephone icon\"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 d-flex\">
          <i class=\"bi bi-clock icon\"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <h4>Follow Us</h4>
          <div class=\"social-links d-flex\">
            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Delicious</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>







          <!-- Vendor JS Files -->
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>

  <!-- Main JS File -->
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

  
    </body>
</html>", "base.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\base.html.twig");
    }
}
