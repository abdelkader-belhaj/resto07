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

/* chefs/index.html.twig */
class __TwigTemplate_0e7dd3a390d11780f296bde0f616b9cd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chefs/index.html.twig"));

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

        yield "Liste des Chefs";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">Gestion des Chefs</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_create");
        yield "\" class=\"btn btn-success\">Ajouter un chef</a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Titre</th>
                        <th style=\"width: 180px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chefs"]) || array_key_exists("chefs", $context) ? $context["chefs"] : (function () { throw new RuntimeError('Variable "chefs" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["chef"]) {
            // line 24
            yield "                        <tr>
                            <td>
                                ";
            // line 26
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 27), "html", null, true);
                yield "\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 27), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit:cover;\">
                                ";
            } else {
                // line 29
                yield "                                    <span class=\"text-muted\">Aucune image</span>
                                ";
            }
            // line 31
            yield "                            </td>
                            <td class=\"fw-bold\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm me-2\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"bi bi-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucun chef trouvé.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['chef'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        return "chefs/index.html.twig";
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
        return array (  171 => 50,  162 => 46,  160 => 45,  148 => 38,  142 => 35,  137 => 33,  133 => 32,  130 => 31,  126 => 29,  118 => 27,  116 => 26,  112 => 24,  107 => 23,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Liste des Chefs{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">Gestion des Chefs</h1>
        <a href=\"{{ path('chefs_create') }}\" class=\"btn btn-success\">Ajouter un chef</a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Titre</th>
                        <th style=\"width: 180px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for key, chef in chefs %}
                        <tr>
                            <td>
                                {% if chef.image %}
                                    <img src=\"{{ chef.image }}\" alt=\"Photo de {{ chef.nom }}\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit:cover;\">
                                {% else %}
                                    <span class=\"text-muted\">Aucune image</span>
                                {% endif %}
                            </td>
                            <td class=\"fw-bold\">{{ chef.nom }}</td>
                            <td>{{ chef.titre }}</td>
                            <td>
                                <a href=\"{{ path('chefs_edit', {'key': key}) }}\" class=\"btn btn-primary btn-sm me-2\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('chefs_delete', {'key': key}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"bi bi-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucun chef trouvé.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "chefs/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\chefs\\index.html.twig");
    }
}
