<div class="panel"><h3><i class="icon-list-ul"></i> {l s='Section list' d='Modules.Imageslider.Admin'}
	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')}&configure=sp_preguntasfrecuentes&addSection=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="{l s='Add new' d='Admin.Actions'}" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="sections">
			{if $preguntas}
				{foreach from=$preguntas item=pregunta}
					<div id="preguntas{$pregunta.id_pregunta_frecuente}" class="panel">
						<div class="row">
							<div class="col-lg-1">
								<span><i class="icon-arrows "></i></span>
							</div>
							
							<div class="col-md-8">
								<h4 class="pull-left">
									#{$pregunta.id_pregunta_frecuente} - {$pregunta.pregunta}
								</h4>
								<div>
									{$pregunta.respuesta}
								</div>
								<div class="btn-group-action pull-right">
									{$section.status}

									<a class="btn btn-default"
										href="{$link->getAdminLink('AdminModules')}&configure=sp_preguntasfrecuentes&id_section={$section.id_section}">
										<i class="icon-edit"></i>
										{l s='Edit' d='Admin.Actions'}
									</a>
									<a class="btn btn-default"
										href="{$link->getAdminLink('AdminModules')}&configure=sp_preguntasfrecuentes&delete_id_slide={$section.id_section}">
										<i class="icon-trash"></i>
										{l s='Delete' d='Admin.Actions'}
									</a>
								</div>
							</div>
						</div>
					</div>
				{/foreach}
			{/if}
		</div>
	</div>
</div>
