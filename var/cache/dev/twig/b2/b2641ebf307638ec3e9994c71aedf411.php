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
class __TwigTemplate_54c01a52a98a306cc489040da30937ad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/front.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyy"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 18, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 27, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyspec(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyspec"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 72, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 84, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyparties(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyparties"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partties"]) || array_key_exists("partties", $context) ? $context["partties"] : (function () { throw new RuntimeError('Variable "partties" does not exist.', 135, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyTable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyTable"));

        // line 176
        yield "
   
<!-- Affichage des messages flash -->
";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "flashes", [], "any", false, false, false, 179));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyGallery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyGallery"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 254, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 277
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyChefs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyChefs"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chefs"]) || array_key_exists("chefs", $context) ? $context["chefs"] : (function () { throw new RuntimeError('Variable "chefs" does not exist.', 293, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 336
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyContact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContact"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  735 => 338,  732 => 337,  722 => 336,  706 => 326,  697 => 322,  695 => 321,  675 => 314,  663 => 305,  659 => 304,  655 => 302,  651 => 300,  643 => 298,  641 => 297,  634 => 294,  616 => 293,  599 => 278,  589 => 277,  572 => 264,  560 => 258,  556 => 257,  552 => 255,  548 => 254,  532 => 240,  522 => 239,  477 => 198,  461 => 184,  446 => 181,  441 => 180,  437 => 179,  432 => 176,  422 => 175,  408 => 159,  397 => 154,  392 => 152,  388 => 151,  384 => 150,  378 => 147,  372 => 144,  367 => 142,  361 => 139,  356 => 136,  352 => 135,  328 => 114,  324 => 112,  314 => 111,  300 => 98,  281 => 93,  275 => 90,  271 => 89,  267 => 88,  256 => 85,  239 => 84,  232 => 79,  214 => 75,  206 => 74,  203 => 73,  186 => 72,  172 => 60,  162 => 59,  150 => 40,  143 => 38,  141 => 37,  133 => 34,  127 => 31,  122 => 29,  117 => 28,  112 => 27,  104 => 21,  93 => 19,  89 => 18,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyy %}
<!-- Menu Section -->
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
          {% for type in types %}
            <li data-filter=\".{{ type }}\">{{ type|replace({'filter-':''})|capitalize }}</li>
          {% endfor %}
        </ul>
      </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      {% for menu in menus %}
        <div class=\"col-lg-6 menu-item isotope-item {{ menu.type }}\">
          <img src=\"{{ menu.image }}\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">{{ menu.titre }}</a><span>\$9.95</span>
          </div>
          <div class=\"menu-ingredients\">
            {{ menu.description }}
          </div>
        </div>
      {% else %}
        <p>Aucun menu trouvé.</p>
      {% endfor %}
    </div>

  </div>
</section>
{% endblock %}














{% block bodyspec %}
<!-- Specials Section -->
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
          {% for key, special in specials %}
            <li class=\"nav-item\">
              <a class=\"nav-link {% if loop.first %}active show{% endif %}\" data-bs-toggle=\"tab\" href=\"#specials-tab-{{ loop.index }}\">
                {{ special.title }}
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          {% for key, special in specials %}
            <div class=\"tab-pane {% if loop.first %}active show{% endif %}\" id=\"specials-tab-{{ loop.index }}\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>{{ special.title }}</h3>
                  <p class=\"fst-italic\">{{ special.sousTitre }}</p>
                  <p>{{ special.description }}</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"{{ special.image }}\" alt=\"\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
{% endblock %}






{% block bodyparties %}
<!-- Events Section -->
<section id=\"events\" class=\"events section\">
  <img class=\"slider-bg\" src=\"{{ asset('assets/img/events-bg.jpg') }}\" alt=\"\" data-aos=\"fade-in\">

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
        {% for party in partties %}
          <div class=\"swiper-slide\">
            <div class=\"row gy-4 event-item\">
              <div class=\"col-lg-6\">
                <img src=\"{{ party.image }}\" class=\"img-fluid\" alt=\"\">
              </div>
              <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                <h3>{{ party.titre }}</h3>
                <div class=\"price\">
                  <p><span>\${{ party.price }}</span></p>
                </div>
                <p class=\"fst-italic\">
                  {{ party.debut }}
                </p>
                <ul>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne1 }}</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne2 }}</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne3 }}</span></li>
                </ul>
                <p>{{ party.final }}</p>
              </div>
            </div>
          </div><!-- End Slider item -->
        {% endfor %}
      </div>

      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</section>
{% endblock %}









{% block bodyTable %}

   
<!-- Affichage des messages flash -->
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">{{ message }}</div>
    {% endfor %}
{% endfor %}

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
        <form action=\"{{ path('front_index') }}\" method=\"post\" role=\"form\">
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

    {% endblock %}




{% block bodyGallery %}

<!-- Gallery Section -->
<section id=\"gallery\" class=\"gallery section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Gallery</h2>
    <div><span>Some photos from</span> <span class=\"description-title\">Our Restaurant</span></div>
  </div><!-- End Section Title -->

  <div class=\"container-fluid\" data-aos=\"fade-up\" data-aos-delay=\"100\">

    <div class=\"row g-0\">

      {% for key, g in galleries %}
        <div class=\"col-lg-3 col-md-4\">
          <div class=\"gallery-item\">
            <a href=\"{{ g.image }}\" class=\"glightbox\" data-gallery=\"images-gallery\">
              <img src=\"{{ g.image }}\" alt=\"\" class=\"img-fluid\">
            </a>
            
          </div>
        </div><!-- End Gallery Item -->
      {% endfor %}

    </div>

   

  </div>

</section><!-- /Gallery Section -->

{% endblock %}



{% block bodyChefs %}



<!-- Chefs Section -->
<section id=\"chefs\" class=\"chefs section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Chefs</h2>
    <div><span>Our Professional</span> <span class=\"description-title\">Chefs</span></div>
  </div><!-- End Section Title -->

  <div class=\"container\">
    <div class=\"row gy-5\">

      {% for key, chef in chefs %}
        <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
          <div class=\"member\">
            <div class=\"pic\">
              {% if chef.image %}
                <img src=\"{{ chef.image }}\" class=\"img-fluid\" alt=\"Photo de {{ chef.nom }}\">
              {% else %}
                <span class=\"text-muted\">Aucune image</span>
              {% endif %}
            </div>
            <div class=\"member-info\">
              <h4>{{ chef.nom }}</h4>
              <span>{{ chef.titre }}</span>
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
              <div class=\"mt-2\">
             
                <form method=\"post\" action=\"{{ path('chefs_delete', {'key': key}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
              
                </form>
              </div>
            </div>
          </div>
        </div>
      {% else %}
        <div class=\"col-12 text-center text-muted\">
          Aucun chef trouvé.
        </div>
      {% endfor %}

    </div>
  </div>

</section><!-- /Chefs Section -->



    {% endblock %}

{% block bodyContact %}
 <div class=\"col-lg-8\">
    <form action=\"{{ path('front_index') }}\" method=\"post\" role=\"form\" class=\"php-email-form\">
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
{% endblock %}
", "front/front.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\front\\front.html.twig");
    }
}
