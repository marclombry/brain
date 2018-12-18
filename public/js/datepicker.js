$(document).ready(function(){
    $(".datepicker").datepicker({
    	 			dateFormat: "yy-mm-dd",
    	 			altField: "#datepicker",
    	 			 numberOfMonths: 2,
      				showButtonPanel: true,
    	 			 hiddenName : true,
					closeText: 'Fermer',
					prevText: 'Précédent',
					nextText: 'Suivant',
					currentText: 'Aujourd\'hui',
					monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
					monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
					dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
					dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
					dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
					weekHeader: 'Sem.'
    			});

});
  /*
  $(document).ready(function(){
			$( ".datepicker" ).each(function() {
				$(".datepicker").datepicker({
    	 			dateFormat: "yy-mm-dd",
    	 			altField: "#datepicker",
					closeText: 'Fermer',
					prevText: 'Précédent',
					nextText: 'Suivant',
					currentText: 'Aujourd\'hui',
					monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
					monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
					dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
					dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
					dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
					weekHeader: 'Sem.'
    			});
			});
   			
 		});

  */
   