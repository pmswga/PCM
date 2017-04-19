<div id="main_menu" class="ui small top menu">
	<div class="item">
		<div class="ui mini statistics">
			<div class="statistic">
				<div class="label">
					Образы
				</div>
				<div class="value">
					{$countImages|default:0}
				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Классы
				</div>
				<div class="value">
					{$countClasses|default:0}
				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Свойства
				</div>
				<div class="value">
					{$countVars|default:0}
				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Методы
				</div>
				<div class="value">
					{$countMethods|default:0}
				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Словари
				</div>
				<div class="value">
					{$countDictionaries|default:0}
				</div>
			</div>
		</div>
	</div>
	{if $messageStatus != NULL}
		<div class="item">
			<div class="ui {$messageStatus} message">
				<i class="close icon"></i>
				<div class="header">{$messageHeader}</div>
				<p>{$messageContent}</p>
			</div>
		</div>
	{/if}
	<div class="right menu">
		<a class="item">
			<i class="signal big icon" title="Метрика"></i>
		</a>
		<a class="item">
			<i class="idea big icon" title="Идеи"></i>
		</a>
		<a id="settingsLink" class="item">
			<i class="settings big icon" title="Настройки"></i>
		</a>
		<a class="item">
			<i class="help circle outline big icon" title="Справка"></i>
		</a>
	</div>
</div>