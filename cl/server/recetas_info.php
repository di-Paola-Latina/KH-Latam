<?php
 header("Content-Type: text/html;charset=utf-8");


//PAGINA 1


$recetas[0] = array(
    "img"=>"AUSSIE.png",
    "titulo"=>"Hamburguesa Aussie",
    "titulobr"=>"HAMBURGUESA<br/>AUSSIE",
    "pan"=>"hamburguesa",
    "tiempo"=>"15 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"4",
    "link"=>"hamburguesa-aussie",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "1 ½ kg de carne molida",
        "1 cucharadita de hojuelas de ají rojo",
        "1 cucharadita de ajo en polvo",
        "1 cucharadita de sal",
        "1 cucharadita de pimienta",
        "1 lata de anillos de piña",
        "1/4 de taza de salsa de tomate",
        "1/4 de taza de mayonesa",
        "1 cucharadita de pasta de ají asiático como Sambal Oelek o Sriracha",
        "2 cucharadas de aceite vegetal, cantidad dividida",
        "4 huevos (grandes)",
        "1 lata de betarraga en escabeche en rodajas",
        "4 rebanadas de queso cheddar (opcional)",
        "1 cebolla en rodajas y salteada (opcional)",
        "4 panes de hamburguesa KING'S HAWAIIAN ®",
    ),
    "preparacion"=>array(
        "En un tazón, mezcla la carne, las hojuelas de ají, el ajo en polvo, la sal y la pimienta.",
        "Pon una sartén grande de hierro fundido a fuego medio-alto, agrega 1 cucharada de aceite de canola, luego dora la piña por ambos lados, hasta que estén ligeramente dorados. Pon la piña en un plato y reservar.",
        "Asa las hamburguesas, volteándolas una vez, hasta que estén cocidas al punto de cocción deseado, aprox. 10 Minutosutos en total para una cocción media. Durante el último minuto, cubre las hamburguesas con queso (opcional); dejar que se derrita. Pon las hamburguesas en un plato.",
        "Mezcla la salsa de tomate, la mayonesa y la pasta de ají en un bowl y reserva.",
        "Mientras tanto, calienta el aceite restante.",
        "Arma tu hamburguesa: en la mitad inferior de cada pan, agrega lechuga, tomate, piña, hamburguesa y la betarraga. Cubre cada uno con un huevo frito; unta la parte superior del pan con la mayonesa.",
        "¡Disfruta este exótico sabor!"
    ),

);
$recetas[1] = array(
    "img"=>"cerdo_bbq.png",
    "titulo"=>"Cerdo BBQ",
    "pan"=>"hamburguesa",
    "tiempo"=>"5 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"8",
    "link"=>"cerdo-bbq",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "500g de cerdo asado preparado",
        "1 1/2 tazas de ensalada de col",
        "1 paquete de hamburguesas KING'S HAWAIIAN®",
        "Salsa barbecue"
    ),
    "preparacion"=>array(
        "Precalienta el horno a 180 °C.",
        "Envuelve el pan en papel de aluminio y calienta en el horno durante unos 10 minutos.",
        "Mientras tanto, agrega la salsa BBQ al cerdo previamente preparado.",
        "Distribuye la carne uniformemente sobre la mitad inferior de los panes.",
        "Cubre con ensalada de col.",
        "Coloca la parte superior del pan sobre el relleno.",
        "Servir inmediatamente."
    ),
);
$recetas[2] = array(
    "img"=>"BOMBAY.png",
    "titulo"=>"Hamburguesa Bombay",
    "pan"=>"hamburguesa",
    "tiempo"=>"5 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"4",
    "link"=>"hamburguesa-bombay",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "1 taza de mayonesa, dividida",
        "6 1/4 cucharaditas de curry en polvo, cantidad dividida",
        "1 1/2 cucharada de yogur natural",
        "1 1/2 cucharada de salsa de tomate",
        "1 cucharada de Sriracha",
        "1 diente de ajo picado",
        "500g de pavo molido",
        "6 cucharadas de cilantro fresco, picado",
        "1/4 taza de cebollas verdes, picadas",
        "2 cucharadas de jengibre fresco, pelado y picado",
        "2 cucharaditas de comino molido",
        "3/4 cucharadita de ají picante en polvo o pimentón picante",
        "1 cucharadita de sal",
        "1 cucharada de aceite de oliva",
        "Tomates, en rodajas",
        "Lechuga",
        "Cebolla morada, en rodajas (a la parrilla opcional)",
        "4 panes de hamburguesa KING'S HAWAIIAN"
    ),
    "preparacion"=>array(
        "Mezcla 3/4 de taza de mayonesa, 2 1/4 de cucharadita de curry en polvo, yogur, kétchup, Sriracha y ajo en un tazón pequeño para hacer la salsa. Deja reposar a temperatura ambiente mientras preparas las hamburguesas.",
        "Mezcla el pavo, los ingredientes del paso 1 en un tazón grande. Mezcla con las manos hasta que quede bien mezclado. Divide la mezcla en 4 porciones iguales. Con las manos mojadas, forma cada porción de hamburguesa de aproximadamente 6cm de diámetro y de 3cm de grosor.",
        "Precalienta 1 cucharada de aceite en una sartén grande a fuego medio-alto. Pon las hamburguesas hasta que estén bien cocidas, presionándolas ligeramente con una espátula antes de darlas vuelta, aprox. 4 minutos por lado.",
        "Coloca las hamburguesas en las mitades inferiores de los panes. Cubre cada hamburguesa con salsa. Agrega lechuga, tomate y cebolla. Finalmente, corona tu hamburguesa con la parte superior del pan. 
        ¡Compártenos la tuya en nuestras redes sociales!"
    ),
);
$recetas[3] = array(
    "img"=>"hamburguesa_doble.png",
    "titulo"=>"Hamburguesa Doble",
    "pan"=>"hamburguesa",
    "tiempo"=>"20 Minutos",
    "coccion"=>"15 Minutos",
    "porciones"=>"4",
    "link"=>"hamburguesa-doble",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "<b>Guacamole:</b>",
        "2 paltas Hass grandes",
        "1/4 taza de cebolla morada, cortada en cubitos pequeños",
        "2 cucharadas de jalapeño, cortado en cubitos pequeños",
        "1 cucharada de ajo picado finamente",
        "1/2 cucharadita de pimentón",
        "1/2 cucharadita de ají en polvo",
        "jugo de un limón <br/><br/>",
        
        "<b>Hamburguesas:</b>",
        "700g de carne molida, preferiblemente con algo de grasa",
        "2 cucharadas de ajo machacado",
        "1 cucharada de salsa picante Sriracha",
        "1 cucharada de salsa Worcestershire",
        "1 cucharadita de pimentón",
        "1 cucharadita de cebolla en polvo",
        "8 lonjas de queso cheddar",
        "8 lonjas de tocino",
        "Encurtidos",
        "Lechuga",
        "Tomates maduros en rodajas",
        "Mostaza molida a la piedra",
        "1 paquete panes de hamburguesa KING'S HAWAIIAN®"
    ),
    "preparacion"=>array(
        "Tritura la palta y agrega cebolla morada, jalapeño, ajo picado, paprika, ají en polvo y el jugo de limón hasta que estén bien combinados. Condimenta con sal y pimienta. Cubre y reserva en el refrigerador.",
        "Sazona la carne molida con sal y pimienta. Combina la carne sazonada con ajo machacado, salsa picante sriracha, salsa Worcestshire, pimentón y cebolla en polvo. Divide la carne molida en ocho hamburguesas, aproximadamente del mismo tamaño.",
        "Enciende la parrilla a fuego medio-alto. Cuando esté al calor deseado, coloca las hamburguesas y cocina durante 5-6 minutos, luego dale la vuelta. Cocina por otros 2-3 minutos dependiendo de la cocción deseada. Cubre cada hamburguesa con una rebanada de queso durante el último minuto de cocción para que se derrita. Haz 4 pilas de dos hamburguesas y retíralas de la parrilla.",
        "Coloca los panes para hamburguesas KING'S HAWAIIAN® en la parrilla, y tuesta durante al menos 30 segundos. Mira de cerca para asegurarte de que no se queme.",
        "Retira los panes y agrégales mostaza, luego pon una lechuga y cubre con rodajas de tomate y pepinillos. A continuación, coloca una pila de hamburguesas encima y cubre con una generosa porción de guacamole y dos rebanadas de tocino.", 
        "¡Tápalo y disfruta!"
    ),
);
$recetas[4] = array(
    "img"=>"maui.png",
    "titulo"=>"Hamburguesa Maui",
    "pan"=>"hamburguesa",
    "tiempo"=>"5 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"1",
    "link"=>"hamburguesa-maui",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "1 hamburguesa angus de 220g",
        "2 cucharadas de salsa teriyaki", 
        "1 rebanada de queso cheddar",
        "60g de cebolla en rodajas finas",
        "2 rodajas de tomate",
        "1 rodaja de piña",
        "1 hoja de lechuga",
        "Para decorar encurtidos y aceitunas",
        "2 cucharadas de mayonesa",
        "2 cucharaditas de shichimi togarashi (condimento de pimiento rojo japonés, disponible en tiendas de alimentos asiáticos)."

    ),
    "preparacion"=>array(
        "Unta la hamburguesa con salsa teriyaki, luego colócala en la parrilla hasta que esté lista.",
        "Tuesta el pan de hamburguesa KING'S HAWAIIAN® en la parrilla.",
        "Tuesta una rodaja de piña en la parrilla.",
        "Para armar la hamburguesa, unta la salsa Shichimi Alioli en los panes. Agrega la hamburguesa, el queso, las rodajas de tomate, lechuga, piña y cebolla.",
        "Sirve con encurtidos y aceitunas."

    ),
);
$recetas[5] = array(
    "img"=>"BUFFALO_BLUE_CHEESE.png",
    "titulo"=>"Buffalo Blue Cheese",
    "pan"=>"hamburguesa",
    "tiempo"=>"30 Minutos",
    "coccion"=>"5 Minutos",
    "porciones"=>"4",
    "link"=>"buffalo-blue-cheese",
    "uso"=>"HAMBURGER BUNS",
    "ingredientes"=> array(
        "4 pechugas de pollo",
        "1 taza de pesto de albahaca",
        "8 rebanadas de queso mozzarella fresco",
        "2 tomates, cortados en 8 rodajas",
        "4 panes de hamburguesa KING'S HAWAIIAN®",
        "8 hojas grandes de albahaca fresca"
    ),
    "preparacion"=>array(
        "Marina el pollo. Mezcla las cuatro pechugas de pollo deshuesadas y sin piel con 1/2 taza de pesto de albahaca en un bowl mediano. Cada pechuga de pollo debe pesar aprox. 450g.",
        "Deja marinar por 10 minutos mientras calientas la parrilla o sartén.",
        "Pon el pollo en la parrilla o sartén. Cocina 10 minutos por lado o hasta que la temperatura interna del pollo alcance 80°C",
        "Asa 8 rodajas de tomate junto al pollo y cocina durante 2 minutos por lado.",
        "Cubre el pollo con 2 rodajas de tomate asado, agrega una rodaja de queso mozzarella fresco encima de cada rodaja de tomate. Deja que el queso se derrita sobre el sándwich durante 3-4 minutos.",
        "Arma el sándwich.", 
        "Tuesta los panes de hamburguesa durante 1-2 minutos. Luego agrega las pechugas caprese a la base de los panes. Agrega dos hojas de albahaca fresca sobre el queso en cada sándwich. Unta el pesto de albahaca en cada uno de los panes superiores y luego tapa los sándwiches.",
        "¡Cuéntanos cómo te quedaron!"
    ),
);
$recetas[6] = array(
    "img"=>"ROLLS_QUESO_Y_TOCINO.png",
    "titulo"=>"Rolls de queso y tocino",
    "pan"=>"rolls",
    "tiempo"=>"30 Minutos",
    "coccion"=>"20 Minutos",
    "porciones"=>"12",
    "link"=>"rolls-de-queso-y-tocino",
    "uso"=>"DINNER ROLLS",
    "ingredientes"=> array(
        "1 pack de 12 rolls KING'S HAWAIIAN®",
        "4 cucharadas de salsa golf",
        "450g de carne molida",
        "1 cucharada de salsa Worcestershire",
        "12 aros de cebolla crujientes",
        "1 cucharadita de sal",
        "1 cucharadita de pimienta negra molida gruesa",
        "2 dientes de ajo picados",
        "2 cucharadas de aceite vegetal o de canola",
        "6 rebanadas de queso cheddar (del tamaño de la base de un roll)",
        "12 rebanadas de tocino, cortados por la mitad y fritos hasta que estén crujientes",
        "6 hojas de lechuga verde, cortadas por la mitad"
    ),
    "preparacion"=>array(
        "Precalienta la parrilla al aire libre o la sartén a fuego medio. En un tazón grande, mezcla la carne molida, la sal, la pimienta, el ajo y la salsa Worcestershire. Forma 12 hamburguesas uniformes de 5cm de ancho y colócalas en un plato o bandeja.",
        "Cepilla cada lado con aceite y coloca las hamburguesas en la parrilla caliente. Cocina durante unos 4 minutos, da la vuelta y continúa cocinando durante otros 4 a 6 minutos, a fuego medio, o 2 a 4 minutos más si las quieres bien cocidas.",
        "Coloca 2 piezas de queso en cada una, junto con 2 mitades de tocino, y cocina durante uno o dos minutos, para que el queso se derrita. Apaga el fuego y deja los rolls en una fuente o bandeja.",
        "Para armar los rolls, córtalos por la mitad horizontalmente y extiende sobre cada mitad la salsa golf. Agrega queso con tocino en cada mitad inferior y cubre con un aro de cebolla crujiente y un poco de lechuga. Pon la parte superior del roll y ensarta con un palillo largo. Servir inmediatamente."
    ),
);
$recetas[7] = array(
    "img"=>"sandwich_de_pollo_asado.png",
    "titulo"=>"Sándwich de pollo asado",
    "pan"=>"rolls",
    "tiempo"=>"10 Minutos",
    "coccion"=>"5 Minutos",
    "porciones"=>"5",
    "link"=>"sandwich-de-pollo-asado",
    "uso"=>"DINNER ROLLS",
    "ingredientes"=> array(
        "2 tazas de pollo asado picado",
        "1 taza de salsa barbecue",
        "1/2 taza de piña triturada enlatada, escurrida con 1 cucharada de jugo reservado",
        "2 cebollas verdes picadas (opcional)",
        "4 rolls"

    ),
    "preparacion"=>array(
        "En un bowl mediano, mezcla el pollo, la salsa barbecue, la piña, el jugo de piña y las cebollas hasta que todo esté bien integrado.",
        "Calienta la mezcla en la cocina o en el microondas hasta que esté bien caliente.",
        "Coloca 1/2 taza de la mezcla sobre cada roll.",
        "Termina el sándwich KING'S HAWAIIAN® con tus ingredientes favoritos.",
        "¡Disfruta!"
    ),
);
$recetas[8] = array(
    "img"=>"POLLO_ALOHA.png",
    "titulo"=>"pollo Aloha",
    "pan"=>"rolls",
    "tiempo"=>"6 Horas",
    "coccion"=>"15 Minutos",
    "porciones"=>"1",
    "link"=>"pollo-aloha",
    "uso"=>"DINNER ROLLS",
    "ingredientes"=> array(
        "30g de piña triturada. Reserva 2 cucharadas para mayonesa de piña",
        "1/4 taza de salsa de soya",
        "1 diente de ajo picado",
        "3cm de jengibre pelado y picado",
        "1 cucharadita de aceite de sésamo",
        "3 pechugas de pollo",
        "3 rodajas de provolone, cortadas en 4 trozos",
        "2 cucharadas de piña triturada",
        "1/2 taza de mayonesa",
        "1 cucharadita de vinagre de arroz",
        "12 rodajas de tomate"
    ),
    "preparacion"=>array(
        "Toma la piña triturada y reserva dos cucharadas para la mayonesa.",
        "Coloca la piña, la salsa de soya, el ajo, el jengibre y el aceite de sésamo en una bolsa con cierre hermético y mezcla bien.",
        "Corta cada pechuga en cuatro trozos (si vas a hacer rolls) y colócalos en la bolsa. Retirar todo el aire, sellar y colocar en el refrigerador durante 6-8 Horas. En un bowl pequeño, mezcla dos cucharadas de piña, mayonesa y vinagre.",
        "Tuesta los rolls KING'S HAWAIIAN® durante cuatro minutos. Dales la vuelta. Asa durante otros cuatro minutos y cubre con una rodaja de queso.",
        "Corta los rolls por la mitad. Unta el fondo con mayonesa de piña; agrega una rodaja de tomate, una hoja de lechuga, el pollo cocido y la parte superior del roll."
    ),
);
$recetas[9] = array(
    "img"=>"CHOCOMALVAS.png",
    "titulo"=>"Chocomalvas",
    "pan"=>"rolls",
    "tiempo"=>"5 Minutos",
    "coccion"=>"5 Minutos",
    "porciones"=>"12",
    "link"=>"chocomalvas",
    "uso"=>"DINNER ROLLS",
    "ingredientes"=> array(
        "1 pack de 12 rolls KING'S HAWAIIAN®",
        "1 barra de chocolate",
        "12 marshmallows grandes"
   ),
    "preparacion"=>array(
        "Tuesta los rolls KING'S HAWAIIAN®.", 
        "Coloca el chocolate en cada roll.",
        "Derrite levemente los marshmallows.",
        "¡Colócalos sobre el chocolate y disfruta!"
    ),
);
$recetas[10] = array(
    "img"=>"DONUTS.png",
    "titulo"=>"Donuts Rolls",
    "pan"=>"rolls",
    "tiempo"=>"5 Minutos",
    "coccion"=>"15 Minutos",
    "porciones"=>"12",
    "link"=>"donuts-rolls",
    "uso"=>"DINNER ROLLS",
    "ingredientes"=> array(
        "1/4 taza de leche entera",
        "1 cucharadita de extracto de vainilla",
        "2 tazas de azúcar flor"

   ),
    "preparacion"=>array(
        "Combina la leche y la vainilla en una olla mediana y calienta a fuego lento hasta que esté tibia. Tamiza el azúcar flor en la mezcla de leche. Batir lentamente, hasta que esté bien combinado. Retira el glaseado del fuego.",
        "Sumerge los rolls KING'S HAWAIIAN® en el glaseado uno a la vez, o viértelos sobre los rolls en una rejilla.",
        "Deja enfriar los rolls glaseados durante 5 minutos antes de servir.",
        "¡A disfrutar!"

    ),
);
$recetas[11] = array(
    "img"=>"BLT_HD.png",
    "titulo"=>"Blt Hot Dogs",
    "pan"=>"hotdog",
    "tiempo"=>"20 Minutos",
    "coccion"=>"15 Minutos",
    "porciones"=>"8",
    "link"=>"blt-hot-dogs",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "8 panes de para hot dogs KING'S HAWAIIAN®", 
        "1/2 taza de mayonesa",
        "8 salchichas",
        "8 piezas de tocino", 
        "2 tazas de lechuga finamente picada",
        "2 tazas de tomates cortados en cubitos"
   ),
    "preparacion"=>array(
        "Calienta la parrilla o sartén a fuego alto mientras preparas las salchichas. Desliza una brocheta en cada salchicha y ponla sobre una tabla de cortar. Con un cuchillo, corta la salchicha en espiral con un ligero ángulo hasta llegar al final de la salchicha. Toma un trozo de tocino y gíralo a través de los cortes en espiral. Retira la brocheta y repite con las demás.",
        "Asa las salchichas en espiral por 4-5 minutos hasta que se alcance el color deseado, teniendo cuidado con las salpicaduras de grasa del tocino.",
        "Cubre cada pan de hot dog KING'S HAWAIIAN® con mayonesa y coloca un hot dog a la parrilla dentro del pan. Cubre con lechuga y tomates y listo para servir."
    ),
);
$recetas[12] = array(
    "img"=>"TOCINO_CHEDDAR.png",
    "titulo"=>"Tocino & Cheddar",
    "pan"=>"hotdog",
    "tiempo"=>"1 Minutos",
    "coccion"=>"1 Minutos",
    "porciones"=>"1",
    "link"=>"tocino-y-cheddar",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "Pan para hot dogs KING'S HAWAIIAN®", 
        "1 salchicha",
        "Tocino picado fino",
        "Queso cheddar",
        "2 cucharadas de mantequilla",
        "1 cucharada de harina",
        "1/3 taza de leche",
        "1 1/2 taza de queso cheddar rallado"
   ),
    "preparacion"=>array(
        "SALSA DE QUESO",
        "Derrite la mantequilla en una olla a fuego medio, mezcla la harina con la mantequilla hasta que quede suave. Vierte la leche en la mezcla de mantequilla y revuelve con una cuchara de madera para mezclar. Cocina y revuelve hasta que la mezcla espese, aprox. 3 minutos. Agrega el queso cheddar y revuelve hasta que se derrita, aprox. 3 minutos más.",
        "SALCHICHAS",
        "Corta las salchichas por la mitad, a lo largo. Corta dos rebanadas de queso cheddar para que se ajusten al ancho de la salchicha. Apila dos rebanadas en la mitad inferior de la salchicha  seguida de la mitad superior.",
        "Usa 1-2 tiras de tocino y envuelve bien toda la salchicha.",
        "Asa a fuego alto de 8 a 10 minutos hasta que la salchicha con tocino esté dorado por todos lados. Retira y coloca sobre una rejilla.",
        "En una olla mediana, cocina el tocino picado. Escurre el exceso de aceite en un plato forrado con papel toalla.",
        "Coloca una salchicha envuelta en tocino sobre un pan de hot dog KING'S HAWAIIAN® seguido de salsa de queso y tocino crujiente."
    ),
);
$recetas[13] = array(
    "img"=>"california.png",
    "titulo"=>"Hot Dogs California",
    "pan"=>"hotdog",
    "tiempo"=>"20 Minutos",
    "coccion"=>"15 Minutos",
    "porciones"=>"8",
    "link"=>"hot-dogs-california",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "Para el aderezo de ensalada de rúcula:", 
        "1/2 taza de hojas de rúcula bebé",
        "1/4 taza de zanahorias ralladas",
        "1/4 taza de pepino, sin semillas y cortado en cubitos",
        "2 cucharadas de vinagre de vino de arroz",
        "Sal y pimienta para condimentar",
        "Para la crema agria de albahaca:",
        "1/2 taza de crema ácida",
        "2 cucharadas de hojas de albahaca fresca",
        "1/4 taza de aceite de oliva extra virgen",
        "1 palta en rodajas",
        "8 salchichas de pavo o ternera",
        "1 paquete panes para hot dogs KING'S HAWAIIAN®" 
   ),
    "preparacion"=>array(
        "En un procesador de alimentos, tritura las hojas de albahaca y el aceite de oliva hasta que quede suave. Reserva en un bowl y mezcla con la crema ácida. Pon a un lado y deja enfriar.",
        "Calienta una sartén a fuego medio-alto.",
        "Vierte la rúcula, zanahorias, pepino y vinagre de vino de arroz en un bowl y mezcla. Sazona con sal y pimienta a gusto.",
        "Cuando la sartén esté caliente, coloca las salchichas y déjalas cocinar de 2-3 minutos. Una vez que estén listas dora los panes KING'S HAWAIIAN® y tuesta levemente.",
        "Una vez que las salchichas estén listas, tuesta los panes de 2-3 minutos, revísalos para que no se quemen.",
        "Retira los panes, agrega las salchichas y cubre con la palta, el aderezo de rúcula y la crema ácida con albahaca.",
        "¡Ya puedes disfrutarlas!"
    ),
);
$recetas[14] = array(
    "img"=>"CANNOLI.png",
    "titulo"=>"Cannoli Dog",
    "pan"=>"hotdog",
    "tiempo"=>"30 Minutos",
    "coccion"=>"5 Minutos",
    "porciones"=>"2",
    "link"=>"cannoli-dog",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "1 taza de leche",
        "3 huevos",
        "1 cucharadita de extracto de vainilla",
        "1 cucharada de azúcar granulada",
        "mantequilla sin sal",
        "Panecillos de hot dogs KING'S HAWAIIAN®",
        "<b>Relleno:</b>", 
        "1 taza de ricota",
        "1/4 taza de azúcar en polvo para espolvorear",
        "1/2 cucharadita de extracto de vainilla",
        "1/3 taza de chispas de chocolate semiamargo",
        "1 taza de fresas en rodajas"

   ),
    "preparacion"=>array(
        "En un bowl, mezcla los huevos, la leche, el extracto de vainilla y el azúcar.",
        "Derrite 2 cucharadas de mantequilla en una sartén antiadherente a fuego medio.",
        "Sumerge el pan de hot dog KING'S HAWAIIAN® en la mezcla de huevo, remójalo bien y cubre uniformemente.",
        "Coloca el pan en la sartén y presiona ligeramente con una espátula.",
        "Cocina 1 minuto por cada lado o hasta que estén doradas.",
        "Coloca la ricota, el azúcar en polvo y el extracto de vainilla en un bowl, batir con una batidora durante 4 minutos.",
        "Mezcla las chispas de chocolate semiamargas con una espátula.",
        "Pon la crema en una manga pastelera, rellena los panes y finaliza con una capa de azúcar en polvo y chispas de chocolate."

    ),
);
$recetas[15] = array(
    "img"=>"JAMON_QUESO_MOSTAZA_CREMOSA.png",
    "titulo"=>"Jamón y Queso con mostaza cremosa",
    "pan"=>"hotdog",
    "tiempo"=>"5 Minutos",
    "coccion"=>"5 Minutos",
    "porciones"=>"2",
    "link"=>"jamon-queso-mostaza-cremosa",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "6 lonjas de jamón acaramelado picado",
        "1/4 taza de queso rallado",
        "2 panes para hot dogs KING'S HAWAIIAN®", 
        "<b>Salsa</b>:",
        "1/4 taza de mostaza",
        "2 cucharadas de mayonesa"
   ),
    "preparacion"=>array(
        "Rocía una sartén con aceite en aerosol antiadherente. Calienta a fuego medio.",
        "Agrega el jamón a la sartén caliente y revuelve durante 3 minutos. Agrega el queso y revuelve continuamente durante 1 minuto más.",
        "Retira del fuego y vierte la mezcla de jamón/queso en panes de manera uniforme.",
        "<b>Salsa:</b>",
        "Mezcla la mostaza con la mayonesa y vierte sobre los sándwiches. Sírvelos calientes."
    ),
);
$recetas[16] = array(
    "img"=>"FIESTA.png",
    "titulo"=>"Hot Dog Fiesta",
    "pan"=>"hotdog",
    "tiempo"=>"10 Minutos",
    "coccion"=>"20 Minutos",
    "porciones"=>"1",
    "link"=>"hot-dog-fiesta",
    "uso"=>"HOT DOG BUNS",
    "ingredientes"=> array(
        "4 salchichas",
        "1 paquete para hot dogs KING'S HAWAIIAN®", 
        "2 ajíes, en rodajas finas",
        "1 cebolla morada mediana, cortada en cubitos",
        "2 tomates, cortados en cubitos",
        "1/2 taza de queso fresco desmenuzado",
        "Cilantro fresco picado",
        "Tocino desmenuzado",
        "700g  de queso cheddar cortado en cubitos",
        "300g de tomates cortados en cubitos y ajíes verdes"
   ),
    "preparacion"=>array(
        "Asa las salchichas durante 6-7 minutos, girando continuamente. Retirar y reservar.",
        "Derrite el queso en una olla mediana a fuego lento. Revuelva hasta que se derrita.",
        "Coloque cada salchicha en un pan de hot dog KING'S HAWAIIAN® seguido de salsa de queso, cebolla, tomate, rodajas de ají, queso fresco y cilantro."
    ),
);
$recetas[17] = array(
    "img"=>"HUEVO_NIDO.png",
    "titulo"=>"Huevito en el nido",
    "pan"=>"sliced",
    "tiempo"=>"5 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"4",
    "link"=>"huevito-en-el-nido",
    "uso"=>"SLICED HAWAIIAN<br/>SWEET BREAD",
    "ingredientes"=> array(
        "2 tazas de jamón rallado",
        "8 rebanadas de pan de molde KING'S HAWAIIAN®", 
        "2 tazas de queso suizo rallado",
        "4 huevos grandes",
        "3 cucharadas de mantequilla sin sal o aceite de oliva",
        "2 cucharadas de hierbas picadas, como perejil o tomillo",
        "Sal y pimienta a gusto"
   ),
    "preparacion"=>array(
        "Precalienta el horno a 190 °C",
        "Coloca 4 rebanadas de pan rebanado en una bandeja para hornear, con el lado inferior engrasado o untado con mantequilla. Espolvorea solo un poco de queso (aprox. una cucharada) en cada rebanada de pan, luego distribuye uniformemente los trozos de jamón, aprox. 1/2 taza por rebanada. Cubre con el queso restante y ponlo en el horno durante unos 10 minutos, o hasta que el queso se derrita y burbujee.",
        "Mientras tanto, usa un cortador grande para hacer un agujero en las 4 rebanadas de pan restantes.",
        "Unte con mantequilla o aceite ambos lados del marco del pan, teniendo cuidado de no romperlo. Tuesta un lado hasta que esté dorado en una sartén grande o plancha a fuego medio-bajo, luego dale la vuelta; unos 3-5 minutos.",
        "Rompe un huevo en cada marco de pan y cubre la sartén para cocinar los huevos al vapor. Cuando las claras se vean firmes y opacas en la parte superior, apague el fuego y espolvoree con sal, pimienta y hierbas.",
        "Retira las rebanadas de jamón y queso del horno; y viértelo sobre las rebanadas de pan con huevo. Sirve caliente, con una pequeña ensalada verde si lo deseas."
    ),
);

$recetas[18] = array(
    "img"=>"SELLADO_PROSCIUTTO.png",
    "titulo"=>"Sellado Prosciutto",
    "pan"=>"sliced",
    "tiempo"=>"15 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"1",
    "link"=>"sellado-prosciutto",
    "uso"=>"SLICED HAWAIIAN<br/>SWEET BREAD",
    "ingredientes"=> array(
        "2 rebanadas de pan de molde KING’S HAWAIIAN",
        "3 láminas de prosciutto",
        "4 rebanadas de queso brie",
        "4 hojas de albahaca",
        "1 cucharadita de salsa picante",
        "2 cucharaditas de mantequilla",
        "2 rodajas de tomate maduro (fino)",
        "Sal y pimienta"
    ),
    "preparacion"=>array(
        "Calienta a fuego medio-bajo una sartén antiadherente grande.",
        "Unta mantequilla en cada lado del pan.",
        "Tuesta el lado inferior hasta que se dore, voltea y pon el fuego en bajo.",
        "En la rebanada tostada izquierda, pon 2 rebanadas de queso brie y luego prosciutto, asegurándote de que cada bocado tenga un poco y luego extiende la salsa picante sobre el jamón.",
        "Sazona el tomate con sal y pimienta.",
        "Atento a la parte inferior de la rebanada de pan para asegurarse de que se dore.",
        "Cuando esté dorado, coloca el lado derecho del queso asado sobre el lado izquierdo.",
        "Presiona suavemente con una espátula sobre el queso asado terminado en la sartén y continúa calentando durante 30 segundos.",
        "Voltea y continúa calentando durante 30 segundos para asegurarte que todos los sabores estén fundidos.",
        "Retira de la sartén y sirve caliente."
    ),
);
$recetas[19] = array(
    "img"=>"PESTO_TOCINO.png",
    "titulo"=>"Pesto y Tocino",
    "pan"=>"sliced",
    "tiempo"=>"10 Minutos",
    "coccion"=>"10 Minutos",
    "porciones"=>"1",
    "link"=>"pesto-y-tocino",
    "uso"=>"SLICED HAWAIIAN<br/>SWEET BREAD",
    "ingredientes"=> array(
        "3 rebanadas de tocino",
        "2 huevos",
        "1 cucharada de leche",
        "1/2 cucharadita de orégano",
        "1/4 cucharadita de sal",
        "1/4 de cucharadita de pimienta negra",
        "2 cucharadas de pesto de albahaca",
        "1/4 taza de queso mozzarella rallado",
        "2 rebanadas de KING'S HAWAIIAN® Sliced ​​Bread"
   ),
    "preparacion"=>array(
        "Coloca una sartén grande a fuego medio-alto.",
        "Agrega el tocino y cocina durante 6-8 minutos, luego voltea (según el nivel deseado de crocancia).",
        "Retira de la sartén y pon el tocino sobre toallas de papel para escurrir la grasa.",
        "Agrega los huevos, la leche, el orégano, la sal y la pimienta a un tazón y mezcla.",
        "Calienta una sartén mediana a fuego medio-alto, cuando esté caliente, agrega los huevos y revuelve.",
        "Tuesta las dos rebanadas de pan KING'S HAWAIIAN®. Unte 1 cucharada de pesto en un lado de cada rebanada, parte los trozos de tocino por la mitad, luego coloca el tocino encima del pesto en una rebanada de pan. Agrega los huevos revueltos encima del tocino, luego la mozzarella rallada.",
        "Cubre con la rebanada restante de pan tostado con pesto"
    ),
);
$recetas[20] = array(
    "img"=>"TOSTADAS_FRABCESAS.png",
    "titulo"=>"Tostadas Francesas",
    "pan"=>"sliced",
    "tiempo"=>"15 Minutos",
    "coccion"=>"15 Minutos",
    "porciones"=>"8",
    "link"=>"tostadas-francesas",
    "uso"=>"SLICED HAWAIIAN<br/>SWEET BREAD",
    "ingredientes"=> array(
        "12 rebanadas de pan de molde KING'S HAWAIIAN®", 
        "4 huevos",
        "1/2 taza de leche entera",
        "1/8 cucharadita de ralladura de naranja"
   ),
    "preparacion"=>array(
        "En un tazón, bate bien los huevos: agrega la leche entera y la ralladura de naranja con los huevos.",
        "Precalienta la sartén. Agrega un poco de mantequilla cubriendo toda la superficie.",
        "Traspasa la mezcla a un recipiente plano. Sumerge rápidamente cada rebanada de pan KING'S HAWAIIAN® en la mezcla, por ambos lados y de manera uniforme.",
        "Fríe cada lado del pan hasta que estén ligeramente dorados.",
        "Retira y sirve con jarabe de arce o coco y azúcar en polvo.",
        "¡A disfrutar!"

    ),
);