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

/* chefs/edit.html.twig */
class __TwigTemplate_062b0b0ce9a6931589aa6815dcf3c2b0 extends Template
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
        yield "Modifier Chef";
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
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 500px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Modifier un Chef</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Nom :</label>
                    <input type=\"text\" name=\"nom\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chef"] ?? null), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"titre\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chef"] ?? null), "titre", [], "any", false, false, false, 19), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image actuelle :</label><br>
                    ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["chef"] ?? null), "image", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chef"] ?? null), "image", [], "any", false, false, false, 24), "html", null, true);
            yield "\" alt=\"Photo actuelle\" class=\"rounded mb-2\" width=\"80\" height=\"80\" style=\"object-fit:cover;\"><br>
                    ";
        } else {
            // line 26
            yield "                        <span class=\"text-muted\">Aucune image</span><br>
                    ";
        }
        // line 28
        yield "                    <label class=\"form-label mt-2\">Changer l’image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_list");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chefs/edit.html.twig";
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
        return array (  113 => 32,  107 => 28,  103 => 26,  97 => 24,  95 => 23,  88 => 19,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chefs/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\chefs\\edit.html.twig");
    }
}
