var ComingSoon = function () {

    return {
        //main function to initiate the module
        init: function () {

            $.backstretch([
    		        "components/assets/img/bg/1.jpg",
    		        "components/assets/img/bg/2.jpg",
    		        "components/assets/img/bg/3.jpg",
    		        "components/assets/img/bg/4.jpg"
    		        ], {
    		          fade: 1000,
    		          duration: 10000
    		    });

            var austDay = new Date();
            austDay = new Date(austDay.getFullYear(), 11, 04);
            console.log( austDay );
            $('#defaultCountdown').countdown({until: austDay});
            $('#year').text(austDay.getFullYear());
        }

    };

}();