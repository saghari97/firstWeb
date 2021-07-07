( function( api ) {

	// Extends our custom "iqra-education" section.
	api.sectionConstructor['iqra-education'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );