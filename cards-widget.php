<?php
/*
Plugin Name: Cards Widget
Plugin URI: https://wordpress.oeg/plugins
Description: /widget que exibe um conteúdo em destaque.
Author: Branco Sousa
Version: 1.0
Author URI: https://brancosousa.com.br/imgfree
*/

//registrar o widget
add_action('widget_init', function() {
    register_widget('Cards');
});

class Cards extends WP_Widget {
    
    //Método construtor da classe
    public function __construct()
    {
        $widget_ops = array {
            'classname'= 'cards'
        
    }

    //Método que mostra a saída no$intance Front End
    public function widget($args, $intance)
    {

    }

    // Método para cadastro no painel
    public function form($instance)
    {

    }
    
    // Método que atualiza o Widget
    public function update($new_instance, $old_instance)
}