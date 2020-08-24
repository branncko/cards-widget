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
    register_widget('Card');
});

class Card extends WP_Widget {
    
    //Método construtor da classe
    public function __construct()
    {
        $widget_ops = array (
            'classname' => 'card'
            'description' => 'Exibe o conteúdo em um card'

        );
        parent::__construct('card', 'Card', $widget_ops);
                    
    }

    //Método que mostra a saída no$intance Front End
    public function widget($args, $intance)
    {

    }

    // Método para cadastro no painel
    public function form($instance)
    {
            $title = '';
            if (!empty($instance['title']))
            {
                $title = $instance['title'];
            }
           
            $description = '';
            if (!empty($instance['description']))
            {
                $description = $instance['description'];
            }
           
            $link_url = '';
            if (!empty($instance['link_url']))
            {
                $link_url = $instance['link_url'];
            }
            
            ?>
            <p>
                <label for="<?php echo $this ->get_field_name('title'); ?>">
                    <?php echo 'Título:' ?>
                </label>
            </p>
            <?php
    }

    
    
    // Método que atualiza o Widget
    public function update($new_instance, $old_instance)
}