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

/* tableFirebase/index.html.twig */
class __TwigTemplate_5da83fc49b2ba05cede3750d5b1f6b75 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableFirebase/index.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h1>Liste des Réservations</h1>
<a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_new");
        yield "\" class=\"btn btn-primary mb-3\">Nouvelle réservation</a>
<table class=\"table\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nombre de personnes</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["table"]) {
            // line 23
            yield "        <tr>
            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "email", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "tel", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "date", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "time", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "numberPeople", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "message", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
            <td>
                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_show", ["key" => $context["key"]]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                <form method=\"post\" action=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . $context["key"])), "html", null, true);
            yield "\">
                    <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                </form>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "        <tr><td colspan=\"8\">Aucune réservation trouvée.</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['table'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tableFirebase/index.html.twig";
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
        return array (  174 => 43,  167 => 41,  165 => 40,  155 => 35,  151 => 34,  147 => 33,  143 => 32,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  111 => 23,  106 => 22,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block body %}
<h1>Liste des Réservations</h1>
<a href=\"{{ path('firebase_table_new') }}\" class=\"btn btn-primary mb-3\">Nouvelle réservation</a>
<table class=\"table\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nombre de personnes</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for key, table in tables %}
        <tr>
            <td>{{ table.name }}</td>
            <td>{{ table.email }}</td>
            <td>{{ table.tel }}</td>
            <td>{{ table.date }}</td>
            <td>{{ table.time }}</td>
            <td>{{ table.numberPeople }}</td>
            <td>{{ table.message }}</td>
            <td>
                <a href=\"{{ path('firebase_table_show', {'key': key}) }}\" class=\"btn btn-sm btn-info\">Voir</a>
                <a href=\"{{ path('firebase_table_edit', {'key': key}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                <form method=\"post\" action=\"{{ path('firebase_table_delete', {'key': key}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ key) }}\">
                    <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                </form>
            </td>
        </tr>
    {% else %}
        <tr><td colspan=\"8\">Aucune réservation trouvée.</td></tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}", "tableFirebase/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\tableFirebase\\index.html.twig");
    }
}
