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

/* menuFirebase/edit.html.twig */
class __TwigTemplate_c24555c0716e68eee39b207baa69e026 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/edit.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "<h1>Modifier le Menu</h1>

<form action=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_edit", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 5, $this->source); })())]), "html", null, true);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <label for=\"titre\">Titre :</label>
        <input type=\"text\" id=\"titre\" name=\"titre\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"description\">Description :</label>
        <textarea id=\"description\" name=\"description\" required>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</textarea>
    </div>
    
    <div class=\"form-group\">
        <label for=\"image\">Image :</label>
        ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            <div class=\"current-image\">
                <p>Image actuelle :</p>
                <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "html", null, true);
            yield "\" width=\"150\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
            </div>
        ";
        }
        // line 24
        yield "        <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">
        <small>Laissez vide pour conserver l'image actuelle</small>
    </div>
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn btn-success\">Mettre à jour</button>
        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
    </div>

     <select name=\"type\" id=\"type\" required>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 35
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", true, true, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) == $context["t"]))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </select>
</form>

<style>
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group input, .form-group textarea {
    width: 100%;
    max-width: 400px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-group textarea {
    height: 80px;
    resize: vertical;
}
.current-image {
    margin: 10px 0;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 4px;
}
.current-image img {
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-actions {
    margin-top: 20px;
}
.btn {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}
.btn-success {
    background-color: #28a745;
    color: white;
}
.btn-secondary {
    background-color: #6c757d;
    color: white;
}
small {
    color: #666;
    font-size: 0.9em;
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuFirebase/edit.html.twig";
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
        return array (  141 => 37,  126 => 35,  122 => 34,  115 => 30,  107 => 24,  99 => 21,  95 => 19,  93 => 18,  85 => 13,  77 => 8,  71 => 5,  67 => 3,  57 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
<h1>Modifier le Menu</h1>

<form action=\"{{ path('firebase_menu_edit', {'key': key}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <label for=\"titre\">Titre :</label>
        <input type=\"text\" id=\"titre\" name=\"titre\" value=\"{{ menu.titre }}\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"description\">Description :</label>
        <textarea id=\"description\" name=\"description\" required>{{ menu.description }}</textarea>
    </div>
    
    <div class=\"form-group\">
        <label for=\"image\">Image :</label>
        {% if menu.image %}
            <div class=\"current-image\">
                <p>Image actuelle :</p>
                <img src=\"{{ menu.image }}\" width=\"150\" alt=\"{{ menu.titre }}\">
            </div>
        {% endif %}
        <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">
        <small>Laissez vide pour conserver l'image actuelle</small>
    </div>
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn btn-success\">Mettre à jour</button>
        <a href=\"{{ path('firebase_menu_index') }}\" class=\"btn btn-secondary\">Annuler</a>
    </div>

     <select name=\"type\" id=\"type\" required>
        {% for t in types %}
            <option value=\"{{ t }}\" {% if menu.type is defined and menu.type == t %}selected{% endif %}>{{ t }}</option>
        {% endfor %}
    </select>
</form>

<style>
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group input, .form-group textarea {
    width: 100%;
    max-width: 400px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-group textarea {
    height: 80px;
    resize: vertical;
}
.current-image {
    margin: 10px 0;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 4px;
}
.current-image img {
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-actions {
    margin-top: 20px;
}
.btn {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}
.btn-success {
    background-color: #28a745;
    color: white;
}
.btn-secondary {
    background-color: #6c757d;
    color: white;
}
small {
    color: #666;
    font-size: 0.9em;
}
</style>

{% endblock %}", "menuFirebase/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\menuFirebase\\edit.html.twig");
    }
}
