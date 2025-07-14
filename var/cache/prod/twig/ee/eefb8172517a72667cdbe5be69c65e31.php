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

/* partties/index.html.twig */
class __TwigTemplate_b7cb589a16c109bca0c844ef08354d45 extends Template
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
        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des Partties";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<h1>🎉 Liste des Partties</h1>

<hr>

<h2>➕ Ajouter une Parttie</h2>
<form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partties_create");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"text\" name=\"titre\" placeholder=\"Titre\" required><br><br>
    <input type=\"number\" name=\"price\" placeholder=\"Prix\" required><br><br>
    <input type=\"text\" name=\"debut\" placeholder=\"Début\" required><br><br>
    <input type=\"text\" name=\"ligne1\" placeholder=\"Ligne 1\" required><br><br>
    <input type=\"text\" name=\"ligne2\" placeholder=\"Ligne 2\" required><br><br>
    <input type=\"text\" name=\"ligne3\" placeholder=\"Ligne 3\" required><br><br>
    <input type=\"text\" name=\"final\" placeholder=\"Final\" required><br><br>
    <input type=\"file\" name=\"image\" required><br><br>
    <button type=\"submit\">✅ Ajouter</button>
</form>

<hr>

<h2>📋 Liste des Partties</h2>
";
        // line 26
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["partties"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partties"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["parttie"]) {
                // line 28
                yield "        <div style=\"border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;\">
            <h3>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "titre", [], "any", false, false, false, 29), "html", null, true);
                yield " — ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "price", [], "any", false, false, false, 29), "html", null, true);
                yield " TND</h3>
            <p><strong>Début :</strong> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "debut", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
            <ul>
                <li>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "ligne1", [], "any", false, false, false, 32), "html", null, true);
                yield "</li>
                <li>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "ligne2", [], "any", false, false, false, 33), "html", null, true);
                yield "</li>
                <li>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "ligne3", [], "any", false, false, false, 34), "html", null, true);
                yield "</li>
            </ul>
            <p><strong>Final :</strong> ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "final", [], "any", false, false, false, 36), "html", null, true);
                yield "</p>

            ";
                // line 38
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "image", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 39
                    yield "                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parttie"], "image", [], "any", false, false, false, 39), "html", null, true);
                    yield "\" alt=\"Image\" style=\"max-width: 200px;\"><br>
            ";
                }
                // line 41
                yield "
            <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partties_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\">✏️ Modifier</a> |
            <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partties_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\" onclick=\"return confirm('Supprimer cette parttie ?')\">🗑️ Supprimer</a>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['parttie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 47
            yield "    <p>Aucune parttie disponible pour le moment.</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partties/index.html.twig";
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
        return array (  159 => 47,  149 => 43,  145 => 42,  142 => 41,  136 => 39,  134 => 38,  129 => 36,  124 => 34,  120 => 33,  116 => 32,  111 => 30,  105 => 29,  102 => 28,  97 => 27,  95 => 26,  77 => 11,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partties/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\partties\\index.html.twig");
    }
}
