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

/* menuFirebase/index.html.twig */
class __TwigTemplate_6e3d8353e4f4f47bf36fb4ed423c4921 extends Template
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
        yield "

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\" role=\"alert\">
            ";
                // line 8
                if (($context["label"] == "success")) {
                    // line 9
                    yield "                <i class=\"fas fa-check-circle me-2\"></i>
            ";
                } elseif ((                // line 10
$context["label"] == "warning")) {
                    // line 11
                    yield "                <i class=\"fas fa-exclamation-triangle me-2\"></i>
            ";
                } elseif ((                // line 12
$context["label"] == "danger")) {
                    // line 13
                    yield "                <i class=\"fas fa-times-circle me-2\"></i>
            ";
                } else {
                    // line 15
                    yield "                <i class=\"fas fa-info-circle me-2\"></i>
            ";
                }
                // line 17
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
";
        // line 23
        yield "<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h2>Gestion des Menus</h2>
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
    </a>
</div>

";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["menus"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <div class=\"card\">
        <div class=\"card-body p-0\">
            <table class=\"table align-items-center justify-content-center mb-0\">
                <thead>
                    <tr>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Menu</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Type</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Description</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 45
                yield "                        <tr>
                            <td>
                                <div class=\"d-flex px-2 align-items-center\">
                                    <div class=\"me-3\">
                                        ";
                // line 49
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 50), "html", null, true);
                    yield "\" class=\"menu-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 50), "html", null, true);
                    yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 8px;\">
                                        ";
                } else {
                    // line 52
                    yield "                                            <div class=\"menu-placeholder d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 54), 0, 1)), "html", null, true);
                    yield "
                                            </div>
                                        ";
                }
                // line 57
                yield "                                    </div>
                                    <div class=\"my-auto\">
                                        <h6 class=\"mb-0 text-sm\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 59), "html", null, true);
                yield "</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                ";
                // line 64
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "                                    <span class=\"badge bg-primary text-xs font-weight-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 65), "html", null, true);
                    yield "</span>
                                ";
                } else {
                    // line 67
                    yield "                                    <span class=\"text-muted text-xs\">Non spécifié</span>
                                ";
                }
                // line 69
                yield "                            </td>
                            <td>
                                <p class=\"text-sm mb-0\">
                                    ";
                // line 72
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 73
                    yield "                                        ";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 73)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 73), 0, 80) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 73), "html", null, true)));
                    yield "
                                    ";
                } else {
                    // line 75
                    yield "                                        <span class=\"text-muted\">Aucune description</span>
                                    ";
                }
                // line 77
                yield "                                </p>
                            </td>
                            <td class=\"align-middle text-center\">
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-sm\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"POST\" 
                                          action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\" 
                                          style=\"display: inline;\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer le menu « ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 89), "html", null, true);
                yield " » ?');\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-sm\" 
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['menu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                </tbody>
            </table>
        </div>
    </div>
";
        } else {
            // line 105
            yield "    ";
            // line 106
            yield "    <div class=\"text-center mt-4\">
        <div class=\"card\">
            <div class=\"card-body py-5\">
                <i class=\"fas fa-utensils fa-3x text-muted mb-3\"></i>
                <h5 class=\"text-muted\">Aucun menu trouvé</h5>
                <p class=\"text-muted mb-3\">Commencez par ajouter votre premier menu.</p>
                <a href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 119
        yield "
<style>
.menu-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 8px;
}
.table th {
    border-bottom: 1px solid #e9ecef;
    font-weight: 600;
}
.gap-2 {
    gap: 0.5rem;
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
        return "menuFirebase/index.html.twig";
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
        return array (  276 => 119,  266 => 112,  258 => 106,  256 => 105,  249 => 100,  232 => 89,  227 => 87,  218 => 81,  212 => 77,  208 => 75,  202 => 73,  200 => 72,  195 => 69,  191 => 67,  185 => 65,  183 => 64,  175 => 59,  171 => 57,  165 => 54,  161 => 52,  153 => 50,  151 => 49,  145 => 45,  141 => 44,  127 => 32,  125 => 31,  117 => 25,  113 => 23,  110 => 21,  96 => 17,  92 => 15,  88 => 13,  86 => 12,  83 => 11,  81 => 10,  78 => 9,  76 => 8,  71 => 7,  66 => 6,  62 => 5,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "menuFirebase/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\menuFirebase\\index.html.twig");
    }
}
