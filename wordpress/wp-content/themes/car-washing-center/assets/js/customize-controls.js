( function( api ) {

	// Extends our custom "car-washing-center" section.
	api.sectionConstructor['car-washing-center'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );