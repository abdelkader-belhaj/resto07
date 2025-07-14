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
class __TwigTemplate_feaf2cf2b05f34665e7c145bf1c4fcb8 extends Template
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
        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<h1>Modifier le Menu</h1>

<form action=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_edit", ["key" => ($context["key"] ?? null)]), "html", null, true);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <label for=\"titre\">Titre :</label>
        <input type=\"text\" id=\"titre\" name=\"titre\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"description\">Description :</label>
        <textarea id=\"description\" name=\"description\" required>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</textarea>
    </div>
    
    <div class=\"form-group\">
        <label for=\"image\">Image :</label>
        ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "image", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            <div class=\"current-image\">
                <p>Image actuelle :</p>
                <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "image", [], "any", false, false, false, 21), "html", null, true);
            yield "\" width=\"150\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "titre", [], "any", false, false, false, 21), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 35
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", true, true, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", false, false, false, 35) == $context["t"]))) {
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
        return array (  132 => 37,  117 => 35,  113 => 34,  106 => 30,  98 => 24,  90 => 21,  86 => 19,  84 => 18,  76 => 13,  68 => 8,  62 => 5,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "menuFirebase/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\menuFirebase\\edit.html.twig");
    }
}
