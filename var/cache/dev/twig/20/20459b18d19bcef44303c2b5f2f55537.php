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

/* gallery/index.html.twig */
class __TwigTemplate_207babc4083086c1d2d068c0e2eed5b3 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Galerie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<h1>Galerie d'images</h1>
<a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_new");
        yield "\">Ajouter une image</a>
<hr>
<div style=\"display: flex; flex-wrap: wrap; gap: 10px;\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["g"]) {
            // line 9
            yield "    <div style=\"border:1px solid #ccc; padding:10px;\">
        <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 10), "html", null, true);
            yield "\" width=\"200\"><br>
        <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_show", ["key" => $context["key"]]), "html", null, true);
            yield "\">Voir</a> |
        <a href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\">Modifier</a>
        <form action=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline\">
            <button type=\"submit\">Supprimer</button>
        </form>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gallery/index.html.twig";
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
        return array (  124 => 18,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  98 => 9,  94 => 8,  88 => 5,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Galerie{% endblock %}
{% block body %}
<h1>Galerie d'images</h1>
<a href=\"{{ path('gallery_new') }}\">Ajouter une image</a>
<hr>
<div style=\"display: flex; flex-wrap: wrap; gap: 10px;\">
  {% for key, g in galleries %}
    <div style=\"border:1px solid #ccc; padding:10px;\">
        <img src=\"{{ g.image }}\" width=\"200\"><br>
        <a href=\"{{ path('gallery_show', {key: key}) }}\">Voir</a> |
        <a href=\"{{ path('gallery_edit', {key: key}) }}\">Modifier</a>
        <form action=\"{{ path('gallery_delete', {key: key}) }}\" method=\"post\" style=\"display:inline\">
            <button type=\"submit\">Supprimer</button>
        </form>
    </div>
  {% endfor %}
</div>
{% endblock %}
", "gallery/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\gallery\\index.html.twig");
    }
}
