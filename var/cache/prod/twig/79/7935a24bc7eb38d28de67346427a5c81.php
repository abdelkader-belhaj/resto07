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

/* front/front.html.twig */
class __TwigTemplate_f1441090034e098f6ef9e0b790b2e667 extends Template
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

        $this->blocks = [
            'bodyy' => [$this, 'block_bodyy'],
            'bodyspec' => [$this, 'block_bodyspec'],
            'bodyparties' => [$this, 'block_bodyparties'],
            'bodyTable' => [$this, 'block_bodyTable'],
            'bodyGallery' => [$this, 'block_bodyGallery'],
            'bodyChefs' => [$this, 'block_bodyChefs'],
            'bodyContact' => [$this, 'block_bodyContact'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<!-- Menu Section -->
<section id=\"menu\" class=\"menu section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Menu</h2>
    <div><span>Check Our Tasty</span> <span class=\"description-title\">Menu</span></div>
  </div>

  <div class=\"container isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

    <!-- Filtres dynamiques -->
    <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-12 d-flex justify-content-center\">
        <ul class=\"menu-filters isotope-filters\">
          <li data-filter=\"*\" class=\"filter-active\">Tous</li>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 19
            yield "            <li data-filter=\".";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["type"], ["filter-" => ""])), "html", null, true);
            yield "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        </ul>
      </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 28
            yield "        <div class=\"col-lg-6 menu-item isotope-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
          <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "</a><span>\$9.95</span>
          </div>
          <div class=\"menu-ingredients\">
            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "        <p>Aucun menu trouvé.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    </div>

  </div>
</section>
";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyspec(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "<!-- Specials Section -->
<section id=\"specials\" class=\"specials section\">
  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Specials</h2>
    <div><span>Check Our</span> <span class=\"description-title\">Specials</span></div>
  </div><!-- End Section Title -->

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["specials"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 73
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link ";
            // line 74
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" data-bs-toggle=\"tab\" href=\"#specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 74), "html", null, true);
            yield "\">
                ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 75), "html", null, true);
            yield "
              </a>
            </li>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["specials"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 85
            yield "            <div class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" id=\"specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
            yield "\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 88), "html", null, true);
            yield "</h3>
                  <p class=\"fst-italic\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                  <p>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "description", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 93), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyparties(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "<!-- Events Section -->
<section id=\"events\" class=\"events section\">
  <img class=\"slider-bg\" src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/events-bg.jpg"), "html", null, true);
        yield "\" alt=\"\" data-aos=\"fade-in\">

  <div class=\"container\">
    <div class=\"swiper init-swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
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
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 136
            yield "          <div class=\"swiper-slide\">
            <div class=\"row gy-4 event-item\">
              <div class=\"col-lg-6\">
                <img src=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "image", [], "any", false, false, false, 139), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
              </div>
              <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                <h3>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "titre", [], "any", false, false, false, 142), "html", null, true);
            yield "</h3>
                <div class=\"price\">
                  <p><span>\$";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "price", [], "any", false, false, false, 144), "html", null, true);
            yield "</span></p>
                </div>
                <p class=\"fst-italic\">
                  ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "debut", [], "any", false, false, false, 147), "html", null, true);
            yield "
                </p>
                <ul>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne1", [], "any", false, false, false, 150), "html", null, true);
            yield "</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne2", [], "any", false, false, false, 151), "html", null, true);
            yield "</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne3", [], "any", false, false, false, 152), "html", null, true);
            yield "</span></li>
                </ul>
                <p>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "final", [], "any", false, false, false, 154), "html", null, true);
            yield "</p>
              </div>
            </div>
          </div><!-- End Slider item -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['party'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "      </div>

      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</section>
";
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyTable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        yield "
   
<!-- Affichage des messages flash -->
";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 179));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 180
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 181
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "
<!-- Book A Table Section -->
<section id=\"book-a-table\" class=\"book-a-table section\">

  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Book A Table</h2>
    <div><span>Book a</span> <span class=\"description-title\">Table</span></div>
  </div>

  <div class=\"container\">
    <div class=\"row g-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-4 reservation-img\" style=\"background-image: url(assets/img/reservation.jpg);\"></div>

      <div class=\"col-lg-8 d-flex align-items-center reservation-form-bg\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <form action=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\" method=\"post\" role=\"form\">
          <div class=\"row gy-4\">
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required>
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\" required>
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Your Phone\" required>
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"date\" name=\"date\" class=\"form-control\" required>
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"time\" name=\"time\" class=\"form-control\" required>
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"number\" name=\"people\" class=\"form-control\" placeholder=\"# of people\" required>
            </div>
          </div>

          <div class=\"form-group mt-3\">
            <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\"></textarea>
          </div>

          <div class=\"text-center mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Book a Table</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>

    ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyGallery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "
<!-- Gallery Section -->
<section id=\"gallery\" class=\"gallery section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Gallery</h2>
    <div><span>Some photos from</span> <span class=\"description-title\">Our Restaurant</span></div>
  </div><!-- End Section Title -->

  <div class=\"container-fluid\" data-aos=\"fade-up\" data-aos-delay=\"100\">

    <div class=\"row g-0\">

      ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["galleries"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["g"]) {
            // line 255
            yield "        <div class=\"col-lg-3 col-md-4\">
          <div class=\"gallery-item\">
            <a href=\"";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 257), "html", null, true);
            yield "\" class=\"glightbox\" data-gallery=\"images-gallery\">
              <img src=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 258), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
            </a>
            
          </div>
        </div><!-- End Gallery Item -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "
    </div>

   

  </div>

</section><!-- /Gallery Section -->

";
        yield from [];
    }

    // line 277
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyChefs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 278
        yield "


<!-- Chefs Section -->
<section id=\"chefs\" class=\"chefs section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Chefs</h2>
    <div><span>Our Professional</span> <span class=\"description-title\">Chefs</span></div>
  </div><!-- End Section Title -->

  <div class=\"container\">
    <div class=\"row gy-5\">

      ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chefs"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["chef"]) {
            // line 294
            yield "        <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 294) * 100), "html", null, true);
            yield "\">
          <div class=\"member\">
            <div class=\"pic\">
              ";
            // line 297
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 298
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 298), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 298), "html", null, true);
                yield "\">
              ";
            } else {
                // line 300
                yield "                <span class=\"text-muted\">Aucune image</span>
              ";
            }
            // line 302
            yield "            </div>
            <div class=\"member-info\">
              <h4>";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 304), "html", null, true);
            yield "</h4>
              <span>";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "titre", [], "any", false, false, false, 305), "html", null, true);
            yield "</span>
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
              <div class=\"mt-2\">
             
                <form method=\"post\" action=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
              
                </form>
              </div>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 321
        if (!$context['_iterated']) {
            // line 322
            yield "        <div class=\"col-12 text-center text-muted\">
          Aucun chef trouvé.
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['chef'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        yield "
    </div>
  </div>

</section><!-- /Chefs Section -->



    ";
        yield from [];
    }

    // line 336
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyContact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 337
        yield " <div class=\"col-lg-8\">
    <form action=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\" method=\"post\" role=\"form\" class=\"php-email-form\">
      <div class=\"row\">
        <div class=\"col-md-6 form-group\">
          <input
            type=\"text\"
            name=\"name\"
            class=\"form-control\"
            id=\"name\"
            placeholder=\"Your Name\"
            required>
        </div>
        <div class=\"col-md-6 form-group mt-3 mt-md-0\">
          <input
            type=\"email\"
            class=\"form-control\"
            name=\"email\"
            id=\"email\"
            placeholder=\"Your Email\"
            required>
        </div>
      </div>
      <div class=\"form-group mt-3\">
        <input
          type=\"text\"
          class=\"form-control\"
          name=\"subject\"
          id=\"subject\"
          placeholder=\"Subject\"
          required>
      </div>
      <div class=\"form-group mt-3\">
        <textarea
          class=\"form-control\"
          name=\"message\"
          placeholder=\"Message\"
          required></textarea>
      </div>
      <div class=\"my-3\">
        <div class=\"loading\">Loading</div>
        <div class=\"error-message\"></div>
        <div class=\"sent-message\">Your message has been sent. Thank you!</div>
      </div>
      <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
    </form>
 </div><!-- End Contact Form -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/front.html.twig";
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
        return array (  690 => 338,  687 => 337,  680 => 336,  667 => 326,  658 => 322,  656 => 321,  636 => 314,  624 => 305,  620 => 304,  616 => 302,  612 => 300,  604 => 298,  602 => 297,  595 => 294,  577 => 293,  560 => 278,  553 => 277,  539 => 264,  527 => 258,  523 => 257,  519 => 255,  515 => 254,  499 => 240,  492 => 239,  450 => 198,  434 => 184,  419 => 181,  414 => 180,  410 => 179,  405 => 176,  398 => 175,  387 => 159,  376 => 154,  371 => 152,  367 => 151,  363 => 150,  357 => 147,  351 => 144,  346 => 142,  340 => 139,  335 => 136,  331 => 135,  307 => 114,  303 => 112,  296 => 111,  285 => 98,  266 => 93,  260 => 90,  256 => 89,  252 => 88,  241 => 85,  224 => 84,  217 => 79,  199 => 75,  191 => 74,  188 => 73,  171 => 72,  157 => 60,  150 => 59,  141 => 40,  134 => 38,  132 => 37,  124 => 34,  118 => 31,  113 => 29,  108 => 28,  103 => 27,  95 => 21,  84 => 19,  80 => 18,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/front.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\front\\front.html.twig");
    }
}
