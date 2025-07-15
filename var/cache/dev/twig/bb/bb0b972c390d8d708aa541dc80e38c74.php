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

/* contacts/index.html.twig */
class __TwigTemplate_d50242b10fc0f523a21610d6f9d8851d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

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

        yield "Liste des Contacts";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">Gestion des Contacts</h1>
        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        yield "\" class=\"btn btn-success\">Nouveau Contact</a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th style=\"width: 200px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
            // line 21
            yield "                        <tr>
                            <td class=\"fw-bold\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["key" => $context["key"]]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-1\">
                                    <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm me-1\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"bi bi-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center text-muted\">Aucun contact trouvé.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contacts/index.html.twig";
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
        return array (  158 => 43,  149 => 39,  147 => 38,  135 => 31,  129 => 28,  123 => 25,  118 => 23,  114 => 22,  111 => 21,  106 => 20,  90 => 7,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Liste des Contacts{% endblock %}
{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">Gestion des Contacts</h1>
        <a href=\"{{ path('contact_new') }}\" class=\"btn btn-success\">Nouveau Contact</a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th style=\"width: 200px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for key, contact in contacts %}
                        <tr>
                            <td class=\"fw-bold\">{{ contact.name }}</td>
                            <td>{{ contact.email }}</td>
                            <td>
                                <a href=\"{{ path('contact_show', { key: key }) }}\" class=\"btn btn-info btn-sm me-1\">
                                    <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('contact_edit', { key: key }) }}\" class=\"btn btn-primary btn-sm me-1\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('contact_delete', { key: key }) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"bi bi-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-center text-muted\">Aucun contact trouvé.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "contacts/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\contacts\\index.html.twig");
    }
}
