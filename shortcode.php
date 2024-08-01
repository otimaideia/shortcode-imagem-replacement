<?php
 function image_replacement_shortcode($atts) {
    // Extrair os atributos do shortcode
    $atts = shortcode_atts(
        array(
            'tag' => 'h1',       // Tag do cabeçalho (h1, h2, h3, etc.)
            'text' => '',        // Texto do cabeçalho
            'url' => '',         // URL da imagem
            'width' => '100%',   // Largura da imagem
            'link' => ''         // URL do link
        ), $atts, 'image_replacement'
    );

    // Verificar se os atributos obrigatórios estão definidos
    if (empty($atts['text']) || empty($atts['url'])) {
        return '<p>Por favor, forneça o texto do cabeçalho e a URL da imagem.</p>';
    }

    // Verificar se a tag é válida
    $valid_tags = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');
    if (!in_array($atts['tag'], $valid_tags)) {
        return '<p>Tag de cabeçalho inválida. Use h1, h2, h3, h4, h5 ou h6.</p>';
    }

    // Construir o HTML para o image replacement
    $output = '<' . esc_attr($atts['tag']) . ' style="position: relative; display: inline-block; margin: 0; padding: 0;">';
    $output .= '<span style="visibility: hidden; font-size: 0; line-height: 0;">' . esc_html($atts['text']) . '</span>';

    if (!empty($atts['link'])) {
        $output .= '<a href="' . esc_url($atts['link']) . '" style="display: block; position: absolute; top: 0; left: 0; width: ' . esc_attr($atts['width']) . '; height: auto;">';
        $output .= '<img src="' . esc_url($atts['url']) . '" alt="' . esc_attr($atts['text']) . '" style="width: 100%; height: auto;">';
        $output .= '</a>';
    } else {
        $output .= '<img src="' . esc_url($atts['url']) . '" alt="' . esc_attr($atts['text']) . '" style="position: absolute; top: 0; left: 0; width: ' . esc_attr($atts['width']) . '; height: auto;">';
    }

    $output .= '</' . esc_attr($atts['tag']) . '>';

    return $output;
}

// Registrar o shortcode
add_shortcode('image_replacement', 'image_replacement_shortcode');
