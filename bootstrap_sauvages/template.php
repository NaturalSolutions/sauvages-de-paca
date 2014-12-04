<?php 
/*permet de de créer une template de type page pour un type de contenu*/
function  bootstrap_sauvages_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
	 if (module_exists('comment')) {
		//$vars['comments'] = comment_node_view($vars['node'],'full');
		$vars['comment_form'] =drupal_get_form("comment_node_{$vars['node']->type}_form", (object) array('nid' => $vars['node']->nid));
	}
  }
}

function bootstrap_sauvages_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'footer') {
    $variables['theme_hook_suggestions'][] = 'region__footer';
  }
 }
 /**/

function bootstrap_sauvages_preprocess_html(&$variables) {
   // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie8-and-below.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
} // end preprocess_html

/***************CUSTOM CONTACT FORM MODULE**************************/
/*function bootstrap_sauvages_form_contact_site_form_alter(&$form, &$form_state) {
  drupal_set_title('FAQ');
}*/
/**
 * Add theme call to define the contact form template and path
 */
/*function bootstrap_sauvages_theme() {
	return array(
   		'contact_site_form' => array(
						'render element' => 'form',
						'template' => 'contact-site-form',
						'path' => drupal_get_path('theme', 'ecobaladeTwitter').'/templates',
							),
  			);
}*/
/**
 * Preproccess call to process the site contact form
 */
/*function ecobaladeTwitter_preprocess_contact_site_form(&$variables)
{
	//an example of setting up an extra variable, you can also put this directly in the template
	$variables['info'] = 'Please fill in the fields below to contact us';
	//this is the contents of the form
	$variables['contact'] = drupal_render_children($variables['form']);
 
}

*/

function bootstrap_sauvages_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = drupal_get_title();
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}



function bootstrap_sauvages_form_user_login_block_alter(&$form, &$form_state, $form_id) {
  $form['links']['#weight'] = 230;
  $form['name']['#size'] = 30;
  $form['pass']['#size'] = 30;
  $form['actions']['submit']['#value'] = t('Connection');
  $form['actions']['submit']['#attributes']['class'][] = 'btn btn-primary btn-block form-submit';

  $markup = l(t('J\'ai oublié mon mot de passe.'), 'user/password', array('attributes' => array('title' => t('Request new password via e-mail.'), 'class' => 'new-password')));
  if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
    $markup .= '<hr> ' . l(t('Créer un compte'), 'user/register', array('attributes' => array('title' => t('Create a new user account.'), 'class' => 'register-link btn btn-block')));
  }
  $markup = '<div class="clearfix">' . $markup . '</div>';
  $form['links']['#markup'] = $markup;
}
