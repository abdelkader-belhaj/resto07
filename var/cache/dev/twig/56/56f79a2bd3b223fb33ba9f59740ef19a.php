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

/* menuFirebase/add.html.twig */
class __TwigTemplate_84cfe577963e0b93a56ffca89e5f9e4f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/add.html.twig"));

        // line 1
        yield "<form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
    <label>Titre : <input type=\"text\" name=\"titre\" required></label><br>
    <label>Description : <input type=\"text\" name=\"description\" required></label><br>
    <label>Image : <input type=\"file\" name=\"image\" accept=\"image/*\" required></label><br>
    <button type=\"submit\">Ajouter</button>

    <select name=\"type\" id=\"type\" required>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 9
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    </select>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuFirebase/add.html.twig";
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
        return array (  71 => 11,  60 => 9,  56 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ path('firebase_menu_add') }}\" method=\"POST\" enctype=\"multipart/form-data\">
    <label>Titre : <input type=\"text\" name=\"titre\" required></label><br>
    <label>Description : <input type=\"text\" name=\"description\" required></label><br>
    <label>Image : <input type=\"file\" name=\"image\" accept=\"image/*\" required></label><br>
    <button type=\"submit\">Ajouter</button>

    <select name=\"type\" id=\"type\" required>
        {% for t in types %}
            <option value=\"{{ t }}\">{{ t }}</option>
        {% endfor %}
    </select>
</form>
", "menuFirebase/add.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\menuFirebase\\add.html.twig");
    }
}
