<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
    return view('homepage');
}

public function talk_with_us(){
    return view('talk-with-us') ;
}

public function our_products(){
    return view('our-products') ;
}

public function services(){
        $array = [
        [
            'key' => 'social-media-management',
            'name' => 'Social media management',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/18314/18314771.png',
            'description' => 'Our Social Media Management service provides tailored strategies to enhance your brand’s digital presence. We analyze your audience, set clear objectives, and create content designed to drive engagement and loyalty. We manage daily profiles, plan targeted campaigns, and monitor results. The goal is to turn social media into a growth engine, strengthening your online identity and connecting with your customers.'
        ],

        [
            'key' => 'digital-marketing',
            'name' => 'Digital Marketing',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/4701/4701497.png',
            'description' => 'Our Digital Marketing service helps your business thrive online through data-driven, measurable strategies. We analyze market trends, competitors, and user behavior to craft campaigns that perform across multiple digital channels—SEO, PPC, social media, email, and content marketing. By optimizing your website, landing pages, and ads, we drive qualified traffic and increase conversions. Continuous monitoring and analytics allow us to refine strategies in real-time for maximum ROI. Our goal is to boost your brand’s visibility, engagement, and sales, turning digital channels into a powerful growth engine for your business.'
        ],

        [
            'key' => 'web-consulence', 
            'name' => 'Web Sites Consulence', 
            'icon' => 'https://cdn-icons-png.flaticon.com/128/7075/7075373.png',
            'description' => 'Our Web Sites Consulence service supports companies in designing, developing, and optimizing their websites. We analyze business and user needs to create effective, intuitive, and responsive digital experiences. We provide guidance on design, structure, performance, and SEO, ensuring your site is both visually appealing and highly functional. Our advice helps improve navigation, boost conversions, and strengthen your online presence. The goal is to turn your website into a powerful tool to attract clients and reinforce your brand.'
        ],

        [
            'key' => 'human-resource',
            'name' => 'Human Resource', 
            'icon' => 'https://cdn-icons-png.flaticon.com/128/6846/6846565.png',
            'description' => 'Our Human Resource service supports companies in effectively managing their workforce. We offer consultancy in recruitment, selection, training, and personnel development to maximize internal skills. We analyze organizational needs to create personalized strategies that improve productivity and employee well-being. We provide tools and processes for performance evaluation and talent retention. The goal is to build motivated, skilled teams that contribute directly to business growth and success.'
        ],

        [
            'key' => 'cyber-security-consulence',
            'name' => 'Cybersecurity Consulence',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/2526/2526007.png',
            'description' => 'Our Cybersecurity Consulting service protects your business from digital threats with customized strategies. We assess systems, networks, and applications to identify vulnerabilities and prevent cyberattacks. We provide guidance on security protocols, credential management, and backups to ensure business continuity. We also train staff on digital security best practices. The goal is to create a secure digital environment, minimizing risks and protecting critical data and assets.'
        ],

        [
            'key' => 'team-training-and-coaching',
            'name' => 'Team Training & Coaching',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/11472/11472663.png',
            'description' => 'Our Team Training & Coaching service helps companies develop the skills and motivation of their teams. We organize customized training sessions to improve communication, collaboration, and performance. We support teams in project management, conflict resolution, and adopting effective methodologies. We provide practical tools to enhance talent, stimulate professional growth, and strengthen company culture. The goal is to build cohesive, prepared teams that actively contribute to business success.'
        ],

        [
            'key' => 'data-analysis-and-reports',
            'name' => 'Data Analysis & Reports',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/993/993762.png',
            'description' => 'Our Data Analysis & Reports service turns your company’s data into strategic insights for informed decision-making. We collect, organize, and analyze data from multiple channels to identify trends, performance metrics, and growth opportunities. We create clear, customized reports with intuitive dashboards and visualizations for easy interpretation. We provide actionable recommendations to optimize processes, marketing strategies, and business operations. The goal is to empower you to make data-driven decisions, improving efficiency and competitiveness.'
        ],

    ];
    return view('services', ['services' => $array]);
}

public function service($services){
    $array = [
        [
            'key' => 'social-media-management',
            'name' => 'Social media management',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/18314/18314771.png',
            'description' => 'Our Social Media Management service provides tailored strategies to enhance your brand’s digital presence. We analyze your audience, set clear objectives, and create content designed to drive engagement and loyalty. We manage daily profiles, plan targeted campaigns, and monitor results. The goal is to turn social media into a growth engine, strengthening your online identity and connecting with your customers.'
        ],

        [
            'key' => 'digital-marketing',
            'name' => 'Digital Marketing',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/4701/4701497.png',
            'description' => 'Our Digital Marketing service helps your business thrive online through data-driven, measurable strategies. We analyze market trends, competitors, and user behavior to craft campaigns that perform across multiple digital channels—SEO, PPC, social media, email, and content marketing. By optimizing your website, landing pages, and ads, we drive qualified traffic and increase conversions. Continuous monitoring and analytics allow us to refine strategies in real-time for maximum ROI. Our goal is to boost your brand’s visibility, engagement, and sales, turning digital channels into a powerful growth engine for your business.'
        ],

        [
            'key' => 'web-consulence', 
            'name' => 'Web Sites Consulence', 
            'icon' => 'https://cdn-icons-png.flaticon.com/128/7075/7075373.png',
            'description' => 'Our Web Sites Consulence service supports companies in designing, developing, and optimizing their websites. We analyze business and user needs to create effective, intuitive, and responsive digital experiences. We provide guidance on design, structure, performance, and SEO, ensuring your site is both visually appealing and highly functional. Our advice helps improve navigation, boost conversions, and strengthen your online presence. The goal is to turn your website into a powerful tool to attract clients and reinforce your brand.'
        ],

        [
            'key' => 'human-resource',
            'name' => 'Human Resource', 
            'icon' => 'https://cdn-icons-png.flaticon.com/128/6846/6846565.png',
            'description' => 'Our Human Resource service supports companies in effectively managing their workforce. We offer consultancy in recruitment, selection, training, and personnel development to maximize internal skills. We analyze organizational needs to create personalized strategies that improve productivity and employee well-being. We provide tools and processes for performance evaluation and talent retention. The goal is to build motivated, skilled teams that contribute directly to business growth and success.'
        ],

        [
            'key' => 'cyber-security-consulence',
            'name' => 'Cybersecurity Consulence',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/2526/2526007.png',
            'description' => 'Our Cybersecurity Consulting service protects your business from digital threats with customized strategies. We assess systems, networks, and applications to identify vulnerabilities and prevent cyberattacks. We provide guidance on security protocols, credential management, and backups to ensure business continuity. We also train staff on digital security best practices. The goal is to create a secure digital environment, minimizing risks and protecting critical data and assets.'
        ],

        [
            'key' => 'team-training-and-coaching',
            'name' => 'Team Training & Coaching',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/11472/11472663.png',
            'description' => 'Our Team Training & Coaching service helps companies develop the skills and motivation of their teams. We organize customized training sessions to improve communication, collaboration, and performance. We support teams in project management, conflict resolution, and adopting effective methodologies. We provide practical tools to enhance talent, stimulate professional growth, and strengthen company culture. The goal is to build cohesive, prepared teams that actively contribute to business success.'
        ],

        [
            'key' => 'data-analysis-and-reports',
            'name' => 'Data Analysis & Reports',
            'icon' => 'https://cdn-icons-png.flaticon.com/128/993/993762.png',
            'description' => 'Our Data Analysis & Reports service turns your company’s data into strategic insights for informed decision-making. We collect, organize, and analyze data from multiple channels to identify trends, performance metrics, and growth opportunities. We create clear, customized reports with intuitive dashboards and visualizations for easy interpretation. We provide actionable recommendations to optimize processes, marketing strategies, and business operations. The goal is to empower you to make data-driven decisions, improving efficiency and competitiveness.'
        ],

    ];    foreach($array as $service){
        if ($service['key'] == $services) {
            return view('detail', ['detail'=>$service]) ;
        }
    }
    abort(404);
    }
}
