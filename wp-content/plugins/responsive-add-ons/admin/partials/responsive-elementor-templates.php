<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://cyberchimps.com/
 * @since      2.6.6
 *
 * @package    Responsive Ready Sites
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<script type="text/template" id="tmpl-rst-template-base-skeleton">
	<div class="dialog-widget dialog-lightbox-widget dialog-type-buttons dialog-type-lightbox" id="rst-sites-modal">
		<div class="dialog-widget-content dialog-lightbox-widget-content">
			<div class="responsive-sites-content-wrap" data-page="1">
				<div class="rst-template-library-toolbar">
					<div class="elementor-template-library-filter-toolbar">
						<div class="elementor-template-library-order">
							<select class="elementor-template-library-order-input elementor-template-library-filter-select elementor-select2">
								<option value=""><?php esc_html_e( 'All', 'responsive-addons' ); ?></option>
								<option value="free"><?php esc_html_e( 'Free', 'responsive-addons' ); ?></option>
								<option value="pro"><?php esc_html_e( 'Pro', 'responsive-addons' ); ?></option>
							</select>
						</div>
					</div>
					<div class="rst-sites-template-library-filter-text-wrapper">
						<label for="elementor-template-library-filter-text" class="elementor-screen-only"><?php esc_html_e( 'Search...', 'responsive-addons' ); ?></label>
						<input id="wp-filter-search-input" autocomplete="off" placeholder="<?php esc_html_e( 'SEARCH', 'responsive-addons' ); ?>" class="">
						<i class="eicon-search"></i>
					</div>
				</div>
				<div id="rst-sites-floating-notice-wrap-id" class="rst-sites-floating-notice-wrap"><div class="rst-sites-floating-notice"></div></div>
				<div class="dialog-message dialog-lightbox-message" data-type="pages">
					<div class="dialog-content dialog-lightbox-content theme-browser"></div>
					<div class="theme-preview"></div>
				</div>
				<div class="responsive-loading-wrap"><div class="responsive-loading-icon"></div></div>
			</div>
			<div class="dialog-buttons-wrapper dialog-lightbox-buttons-wrapper"></div>
		</div>
		<div class="dialog-background-lightbox"></div>
	</div>
</script>
<script type="text/template" id="tmpl-rst-template-modal__header">
	<div class="dialog-header dialog-lightbox-header">
		<div class="rst-sites-modal__header">
			<div class="rst-sites-modal__header__logo-area">
				<div class="rst-sites-modal__header__logo">
					<span class="rst-sites-modal__header__logo__icon-wrapper"></span>
				</div>
				<div class="back-to-layout" title="<?php esc_html_e( 'Back to Layout', 'responsive-addons' ); ?>" data-step="1"><i class="eicon-angle-left"></i></div>
				<div id="rst-pro-template"></div>
			</div>
			<div class="elementor-templates-modal__header__items-area">
				<div class="rst-sites-modal__header__close rst-sites-modal__header__close--normal rst-sites-modal__header__item">
					<i class="dashicons close dashicons-no-alt" aria-hidden="true" title="<?php esc_html_e( 'Close', 'responsive-addons' ); ?>"></i>
					<span class="elementor-screen-only"><?php esc_html_e( 'Close', 'responsive-addons' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/template" id="tmpl-responsive-sites-list">

	<#
		var count = 0;
		for ( key in data ) {
			if ( true === data[key]['allow_pages'] ) {

				var page_data = data[ key ][ 'pages' ];
				var site_type = data[ key ][ 'demo_type' ] || '';
				var actual_site_id = data[key]['id']
				var required_plugins = JSON.stringify(data[ key ]['required_plugins'])
				var required_pro_plugins = JSON.stringify(data[ key ]['required_pro_plugins'])
				var wpforms_path = data[key]['wpforms_path']
				var site_url = data[key]['site_url']
				if ( 0 == Object.keys( page_data ).length ) {
					continue;
				}
				if ( undefined == site_type ) {
					continue;
				}
				if ( '' !== ResponsiveElementorSitesAdmin.siteType ) {
					if ( 'free' == ResponsiveElementorSitesAdmin.siteType && site_type != 'free' ) {
						continue;
					}

					if ( 'free' != ResponsiveElementorSitesAdmin.siteType && site_type == 'free' ) {
						continue;
					}
				}
				var type_class = ' site-type-' + data[ key ]['demo_type'];
				var site_title = data[ key ]['title']['rendered'].slice( 0, 25 );
				if ( data[ key ]['title']['rendered'].length > 25 ) {
					site_title += '...';
				}
				count++;
	#>
				<div class="theme responsive-theme site-single publish page-builder-elementor {{type_class}}" data-actual-site-id="{{actual_site_id}}" data-required-plugins="{{required_plugins}}" data-required-pro-plugins="{{required_pro_plugins}}" data-wpforms-path="{{wpforms_path}}" data-site-url="{{site_url}}" data-site-id="{{key}}" data-template-id="">
					<div class="inner">
						<span class="site-preview" data-href="" data-title={{site_title}}>
							<div class="theme-screenshot one loading" data-step="1" data-src={{data[ key ]['featured_image_url']}} data-featured-src={{data[ key ]['featured-image-url']}}>
								<div class="elementor-template-library-template-preview">
									<i class="eicon-zoom-in" aria-hidden="true"></i>
								</div>
							</div>
						</span>
						<div class="theme-id-container">
							<h3 class="theme-name">{{{site_title}}}</h3>
						</div>
						<# if ( data[ key ]['demo_type'] && 'free' !== data[ key ]['demo_type'] ) { #>
							<div class="agency-ribbons" title="<?php esc_attr_e( 'This pro template is accessible with Responsive Pro.', 'responsive-addons' ); ?>"> <?php esc_html_e( 'Pro', 'responsive-addons' ); ?></div>
						<# } #>
					</div>
				</div>
	<#
			}
		}
	#>
</script>
<script type="text/template" id="tmpl-responsive-sites-list-search">

	<#
		var count = 0;
		for ( let ind=0; ind < data.length; ind++ ) {
			if ( 'Blog' === data[ind]['page_title'] || 'blog' === data[ind]['page_title'] ) {
				continue;
			}
			var site_type = ResponsiveElementorSitesAdmin.templateType;
			var type_class = ' site-type-' + site_type;
			var site_id = ( undefined == data.site_id ) ? data[ind].site_id : data.site_id;
			var page_id = data[ind].page_id;
			if ( undefined == site_type ) {
				continue;
			}
			if ( 'gutenberg' == data[ind]['site-pages-page-builder'] ) {
				continue;
			}
			var site_title = data[ ind ]['page_title'].slice( 0, 25 );
			if ( data[ ind ]['page_title'].length > 25 ) {
				site_title += '...';
			}
			count++;
	#>
		<div class="theme responsive-theme site-single publish page-builder-elementor {{type_class}}" data-template-id={{ind}} data-page-id={{page_id}} data-site-id={{site_id}}>
			<div class="inner">
				<span class="site-preview" data-href="" data-title={{site_title}}>
					<div class="theme-screenshot one loading" data-step="2" data-src={{data[ ind ]['featured_image']}} data-featured-src={{data[ ind ]['featured_image']}}>
						<div class="elementor-template-library-template-preview">
							<i class="eicon-zoom-in" aria-hidden="true"></i>
						</div>
					</div>
				</span>
				<div class="theme-id-container">
					<h3 class="theme-name">{{{site_title}}}</h3>
					<#
					if ( 'pages' == ResponsiveElementorSitesAdmin.type ) {
						if( 'free' !== site_type && ! responsiveElementorSites.license_status ) {
					#>	
							<a class="elementor-template-library-template-action elementor-template-library-template-go-pro" href="{{responsiveElementorSites.getProURL}}" target="_blank">
								<i class="eicon-external-link-square" aria-hidden="true"></i>
								<span class="elementor-button-title"><?php esc_html_e( 'Get Pro!', 'responsive-addons' ); ?></span>
							</a>
					<# 	}
					}
					#>	
				</div>
			</div>
		</div>
	<#
		}

		if ( count == 0 ) {
	#>
		<div class="responsive-sites-no-sites">
			<div class="inner">
				<h3><?php esc_html_e( 'Sorry No Results Found.', 'responsive-addons' ); ?></h3>
				<div class="content">
					<div class="description">
						<div class="back-to-layout-button"><span class="button responsive-sites-back"><?php esc_html_e( 'Back to Templates', 'responsive-addons' ); ?></span></div>
					</div>
				</div>
			</div>
		</div>
	<#
		}
	#>
</script>

<script type="text/template" id="tmpl-responsive-sites-search">

	<#
		var count = 0;
		for ( ind in data ) {

			if ( 'Blog' === data[ind]['page_title'] || 'blog' === data[ind]['page_title'] ) {
				continue;
			}

			var site_id = ( undefined == data.site_id ) ? data[ind].site_id : data.site_id;
			var actual_site_id = data[ind]['actual_site_id'];
			var site_url = data[ind]['site_url'];
			if ( undefined === data[ind]['pro_plugins'] ) continue;
			var page_id = data[ind]['page_id'];

			var site_type = data[ind]['type'];
			var required_plugins = JSON.stringify(data[ind]['required_plugins']);
			var required_pro_plugins = JSON.stringify(data[ind]['required_pro_plugins']);

			if ( undefined == site_type ) {
				continue;
			}

			var parent_name = '';
			if ( undefined != data[ind]['parent-site-name']['rendered'] ) {
				var parent_name = data[ind]['parent-site-name']['rendered']
			}

			var complete_title = parent_name + ' - ' + data[ ind ]['page_title'];
			var site_title = complete_title.slice( 0, 25 );
			if ( complete_title.length > 25 ) {
				site_title += '...';
			}

			var tmp = site_title.split(' - ');
			var title1 = site_title;
			var title2 = '';
			if ( undefined !== tmp && undefined !== tmp[1] ) {
				title1 = tmp[0];
				title2 = ' - ' + tmp[1];
			} else {
				title1 = tmp[0];
				title2 = '';
			}

			var type_class = ' site-type-' + site_type;
			count++;
	#>
		<div class="theme responsive-theme site-single publish page-builder-elementor {{type_class}}" data-template-id={{ind}} data-site-id={{site_id}} data-actual-site-id="{{actual_site_id}}" data-required-plugins="{{required_plugins}}" data-required-pro-plugins="{{required_pro_plugins}}" data-wpforms-path="{{data[ind]['wpforms_path']}}" data-site-url="{{site_url}}" data-page-id="{{page_id}}">
			<div class="inner">
				<span class="site-preview" data-href="" data-title={{title2}}>
					<div class="theme-screenshot one loading" data-type={{data[ind]['type']}} data-step="search" data-src={{data[ ind ]['featured_image']}} data-featured-src={{data[ ind ]['featured_image']}}></div>
				</span>
				<div class="theme-id-container">
					<h3 class="theme-name"><strong>{{title1}}</strong>{{title2}}</h3>
				</div>
				<# if ( site_type && 'free' !== site_type ) { #>
					<?php /* translators: %1$s External Link */ ?>
					<div class="agency-ribbons" title="<?php esc_attr_e( 'This pro template is accessible with Responsive Pro.', 'responsive-addons' ); ?>"><?php esc_html_e( 'Pro', 'responsive-addons' ); ?></div>
				<# } #>
			</div>
		</div>
	<#
		}

		if ( count == 0 ) {
	#>
		<div class="responsive-sites-no-sites">
			<div class="inner">
				<h3><?php esc_html_e( 'Sorry No Results Found.', 'responsive-addons' ); ?></h3>
			</div>
		</div>
	<#
		}
	#>
</script>

<script type="text/template" id="tmpl-responsive-sites-elementor-preview">
	<#
	let wrap_height = $elscope.find( '.responsive-sites-content-wrap' ).height();
	wrap_height = ( wrap_height - 55 );
	wrap_height = wrap_height + 'px';
	#>
	<div id="responsive-blocks" class="themes wp-clearfix" data-site-id="{{data.id}}" style="display: block;">
		<div class="single-site-wrap">
			<div class="single-site">
				<div class="single-site-preview-wrap">
					<div class="single-site-preview" style="max-height: {{wrap_height}};">
						<img class="theme-screenshot" data-src="" src="{{data['featured_image']}}">
					</div>
				</div>
			</div>
		</div>
	</div>
</script>

<script type="text/template" id="tmpl-responsive-sites-elementor-preview-actions">
	<#
	var demo_link = '';
	var action_str = 'Template';
	#>
	<div class="responsive-preview-actions-wrap">
		<div class="responsive-preview-actions-inner-wrap">
			<div class="responsive-preview-actions">
				<div class="site-action-buttons-wrap">
					<div class="responsive-sites-import-template-action site-action-buttons-right">
						<#
						var is_free = true;

						if ( 'pages' == ResponsiveElementorSitesAdmin.type ) {
							if ( 'free' !== ResponsiveElementorSitesAdmin.templateType ) {
								if ( responsiveElementorSites.license_status ) {
									if ( responsiveElementorSites.isREAActivated ) {
						#>
										<div type="button" class="button button-hero button-primary rst-library-template-insert disabled"><?php esc_html_e( 'Import ', 'responsive-addons' ); ?>{{action_str}}</div>
						<#
									} else {
						#>
										<p style="color: #FF0000; font-size: 12px; margin-right: 14px;"><span class="eicon-warning-full"></span>This Pro Template requires REA plugin. <a style="color: #FF0000; text-decoration: underline" href="https://docs.cyberchimps.com/responsive-elementor-addons/" target="_blank">Read More.</a></p>
						<#
									}
								} else {
									if ( responsiveElementorSites.isREAActivated ) {
						#>
										<a class="button button-hero button-primary" href="{{responsiveElementorSites.getProURL}}" target="_blank">{{responsiveElementorSites.getProText}}<i class="dashicons dashicons-external"></i></a>
						<#
									} else {
						#>
										<p style="color: #FF0000; font-size: 12px; margin-right: 14px;"><span class="eicon-warning-full"></span>This Pro Template requires REA plugin. <a style="color: #FF0000; text-decoration: underline" href="https://docs.cyberchimps.com/responsive-elementor-addons/" target="_blank">Read More.</a></p>
										<a class="button button-hero button-primary" href="{{responsiveElementorSites.getProURL}}" target="_blank">{{responsiveElementorSites.getProText}}<i class="dashicons dashicons-external"></i></a>
						<#
									}
								}
							} else {
						#>
								<div type="button" class="button button-hero button-primary rst-library-template-insert disabled"><?php esc_html_e( 'Import ', 'responsive-addons' ); ?>{{action_str}}</div>
						<#
							}
						}
						#>
						<div class="responsive-sites-tooltip"><span class="responsive-sites-tooltip-icon" data-tip-id="responsive-sites-tooltip-plugins-settings"><span class="dashicons dashicons-info-outline"></span></span></div>
					</div>
				</div>
			</div>
			<div class="rst-tooltip-wrap">
				<div>
					<div class="rst-tooltip-inner-wrap" id="responsive-sites-tooltip-plugins-settings">
						<ul class="required-plugins-list"><span class="spinner is-active"></span></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>

<?php
