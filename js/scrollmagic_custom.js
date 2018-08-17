// Scroll magic Settings

// init controller           
var controller = new ScrollMagic.Controller();
// init controller           
var controller = new ScrollMagic.Controller();


        // Scroll magic Settings

		 
		 // Animación de los mas vendidos
		 // build tween
		var tweenStagger = new TimelineMax();
				 tweenStagger.staggerFromTo('.cardScale', 1, { scale: 0, x:-100, ease: Quad.easeInOut }, { scale: 1, x:0, ease: Quad.easeInOut }, 0.2);

		var sceneStagger = new ScrollMagic.Scene({
			triggerElement: "#trigger"
		});

		sceneStagger.setTween(tweenStagger)
//		 	.addIndicators({name:"staggerScale"})
		 	.addTo(controller);
         
             


		 // Animación de Location
		 // build tween
		 	 
		 var tweenLocation = new TimelineMax();
         tweenLocation.staggerFromTo('.locationScale', 1, { scale: 0, y:-100, ease: Quad.easeInOut }, { scale: 1, y:0, ease: Quad.easeInOut }, 0.2);
         tweenLocation.timeScale(0.75);
		 
		 var sceneLocation = new ScrollMagic.Scene({
            triggerElement: "#trigger",
//            duration: 300,
            offset: -100
		});

		sceneLocation.setTween(tweenLocation)
		 	.addIndicators({name:"location"})
		 	.addTo(controller);
    
             
             var tweenLocation2 = new TimelineMax();
             tweenLocation2.staggerFromTo('.locationScale2', 1, { scale: 0, y:-100, ease: Quad.easeInOut }, { scale: 1, y:0, ease: Quad.easeInOut }, 0.2);
             tweenLocation2.timeScale(0.75);
             var sceneLocation2 = new ScrollMagic.Scene({
                triggerElement: "#triggerlocation2",
//                duration: 200,
                offset: 300
            });

            sceneLocation2.setTween(tweenLocation2)
		 	.addIndicators({name:"location2"})
		 	.addTo(controller);


             var tweenLocation3 = new TimelineMax();
             tweenLocation3.staggerFromTo('.locationScale3', 1, { scale: 0, y:-100, ease: Quad.easeInOut }, { scale: 1, y:0, ease: Quad.easeInOut }, 0.2);
             tweenLocation3.timeScale(0.75);
             var sceneLocation3 = new ScrollMagic.Scene({
                triggerElement: "#triggerlocation3",
//                duration: 200,
                 offset: 100
            });

            sceneLocation3.setTween(tweenLocation3)
		 	.addIndicators({name:"location3"})
		 	.addTo(controller);
             
		 // Animación de productos
		 // build tween
         var tweenSlide = new TimelineMax();
         tweenSlide.fromTo('#slideLeft', 1, { x:-100, opacity:0, ease: Quad.easeInOut }, { x:0, opacity:1, ease: Quad.easeInOut }, 0.2)
                    .fromTo('#slideRight', 1, { x:100, opacity:0, ease: Quad.easeInOut }, { x:0, opacity:1, ease: Quad.easeInOut }, 0.2);

            var sceneSlide = new ScrollMagic.Scene({
                triggerElement: "#triggerSlide",
                offset: 100
                
            });

            sceneSlide.setTween(tweenSlide)
            	.addIndicators({name:"triggerSlide"})
                .addTo(controller);
            








		 // Animación de los Proyectos
		 // build tween
		 var tweenProyectos = new TimelineMax();
		 tweenProyectos.staggerFromTo('.proyectScale', 1, { 
			 cycle: {
				 scale: function(){
					 return Math.random() * 0;
				 }
			 },
			 cycle:{
				 y: function(){
					return Math.random() * 100; 
				 }
			 }, 
			 ease: Quad.easeInOut,
			 opacity:0
		 }, { 
			 scale: 1, 
			 y:0, 
			 ease: Quad.easeInOut ,
			 opacity: 1
		 }, 0.2);
		 
		 tweenProyectos.timeScale(0.75);
		 
		 var sceneProyectos = new ScrollMagic.Scene({
			triggerElement: "#trigger3",
			 duration: 500
		});

		sceneProyectos.setTween(tweenProyectos)
//		 	.addIndicators({name:"staggerProyectos"})
		 	.addTo(controller);
         
         
          
