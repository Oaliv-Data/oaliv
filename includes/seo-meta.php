<?php
/**
 * Gestion centralisée des balises META pour le SEO
 */

// Récupération du nom de la page actuelle
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Configuration des meta tags par page
$page_meta = [
    'index' => [
        'title' => WEBSITE_TITLE,
        'description' => WEBSITE_DESCRIPTION,
        'keywords' => WEBSITE_KEYWORDS,
        'canonical' => WEBSITE_URL,
        'og_type' => 'website'
    ],
    'nos-services' => [
        'title' => 'Nos Services - Développement Web, SEO, Applications | Oaliv Douala',
        'description' => 'Découvrez nos services : création de sites web, développement d\'applications mobiles, SEO, UX/UI design, marketing digital. Expertise reconnue à Douala, Cameroun.',
        'keywords' => 'services web douala, développement applications, SEO cameroun, création site web, UX UI design',
        'canonical' => WEBSITE_URL . '/nos-services',
        'og_type' => 'website'
    ],
    'nos-realisations' => [
        'title' => 'Nos Réalisations - Portfolio Web & Applications | Oaliv',
        'description' => 'Découvrez notre portfolio : sites web, applications mobiles et projets digitaux réalisés pour nos clients au Cameroun. +80 projets réussis.',
        'keywords' => 'portfolio web cameroun, réalisations sites web, projets digitaux douala',
        'canonical' => WEBSITE_URL . '/nos-realisations',
        'og_type' => 'website'
    ],
    'contact' => [
        'title' => 'Contact - Demandez un Devis Gratuit | Oaliv Douala',
        'description' => 'Contactez Oaliv pour votre projet web ou mobile. Devis gratuit et personnalisé. Agence web à Douala, Cameroun. Réponse sous 24h.',
        'keywords' => 'contact agence web douala, devis site web, développement cameroun',
        'canonical' => WEBSITE_URL . '/contact',
        'og_type' => 'website'
    ],
    'a-propos-de-nous' => [
        'title' => 'À Propos - Agence Web Innovante | Oaliv Douala',
        'description' => 'Découvrez Oaliv, agence web experte à Douala. +100 clients, +80 projets, +30 secteurs. Innovation et excellence dans le digital depuis plusieurs années.',
        'keywords' => 'agence web douala, équipe développement, expertise digital cameroun',
        'canonical' => WEBSITE_URL . '/a-propos-de-nous',
        'og_type' => 'website'
    ],
    'carrieres' => [
        'title' => 'Carrières - Rejoignez Notre Équipe | Oaliv Douala',
        'description' => 'Rejoignez Oaliv ! Opportunités de carrière en développement web, marketing digital, UX/UI. Postulez maintenant à Douala, Cameroun.',
        'keywords' => 'emploi développeur douala, carrière web cameroun, recrutement IT',
        'canonical' => WEBSITE_URL . '/carrieres',
        'og_type' => 'website'
    ]
];

// Récupération des métadonnées pour la page actuelle
$current_meta = isset($page_meta[$current_page]) ? $page_meta[$current_page] : $page_meta['index'];

// Variables globales pour utilisation dans les templates
$meta_title = $current_meta['title'];
$meta_description = $current_meta['description'];
$meta_keywords = $current_meta['keywords'];
$meta_canonical = $current_meta['canonical'];
$meta_og_type = $current_meta['og_type'];

// Schema.org par type de page
function getPageSchema($page_type) {
    switch($page_type) {
        case 'nos-services':
            return [
                "@context" => "https://schema.org",
                "@type" => "Service",
                "provider" => [
                    "@type" => "Organization",
                    "name" => "Oaliv",
                    "url" => WEBSITE_URL
                ],
                "serviceType" => [
                    "Développement web",
                    "Marketing digital", 
                    "SEO",
                    "Applications mobiles",
                    "UX/UI Design"
                ],
                "areaServed" => "Cameroun"
            ];
        case 'contact':
            return [
                "@context" => "https://schema.org",
                "@type" => "ContactPage",
                "mainEntity" => [
                    "@type" => "Organization",
                    "name" => "Oaliv",
                    "url" => WEBSITE_URL,
                    "email" => WEBSITE_AUTHOR_MAIL
                ]
            ];
        default:
            return null;
    }
}
