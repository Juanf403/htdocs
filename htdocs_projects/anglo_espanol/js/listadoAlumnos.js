$(document).ready(function(){
	$("#Kinder").click(function(){
		 alert("hola");
	});

});

function kinder(){
	$("#NombreM").text("Carlos Perez Aguiñaga");
	$("#Parciales").text("Año :");
	$("#NumSemestre").text("2");
	$("#NivelAcademico").text("Kinder");
	$("#tablaDescripcion tr").remove();
	$("#tablaDescripcion").append("<tr><th>Materia</th><th>Parcial 1</th><th>Parcial 2</th><th>Parcial 3</th><th>Parcial 4</th><th>Calificacion</th></tr>");
	$("#tablaDescripcion").append("<tr><td>Lectura</td><td>8</td><td>10</td><td>8</td><td>9</td><td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>Dibujo</td><td>7</td><td>9</td><td>8</td><td>9</td><td>8</td></tr>");


}

function primaria(){
	$("#NombreM").text("Luis Manuel de la Peña");
	$("#Parciales").text("Año :");
	$("#NumSemestre").text("5");
	$("#NivelAcademico").text("Primaria");
	$("#tablaDescripcion tr").remove();
	$("#tablaDescripcion").append("<tr><th>Materia</th><th>Parcial 1</th><th>Parcial 2</th><th>Parcial 3</th><th>Parcial 4</th><th>Calificacion</th></tr>");
	$("#tablaDescripcion").append("<tr><td>Español</td><td>8</td><td>10</td><td>8</td><td>9</td><td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>Matematicas</td><td>7</td><td>9</td><td>8</td><td>9</td><td>8</td></tr>");


}
function secundaria(){
	$("#NombreM").text("Juan Ahumada");
	$("#Parciales").text("Año :");
	$("#NumSemestre").text("3");
	$("#NivelAcademico").text("Secundaria");
	$("#tablaDescripcion tr").remove();
	$("#tablaDescripcion").append("<tr><th>Materia</th><th>Bimestre 1</th><th>Bimestre 2</th><th>Bimestre 3</th><th>Bimestre 4</th><th>Calificacion</th></tr>");
	$("#tablaDescripcion").append("<tr><td>Español</td><td>7</td><td>9</td><td>8</td><td>10</td><td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>Biologia</td><td>7</td><td>9</td><td>8</td><td>9</td><td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>Quimica</td><td>8</td><td>9</td><td>10</td><td>9</td><td>9</td></tr>");

}
function prepa(){
	$("#NombreM").text("Jorge Antonio Tonone");
	$("#Parciales").text("Semestre :");
	$("#NumSemestre").text("5");
	$("#NivelAcademico").text("Preparatoria");
	$("#tablaDescripcion tr").remove();
	$("#tablaDescripcion").append("<tr><th>Materia</th><th>Parcial 1</th><th>Parcial 2</th><th>Parcial 3</th><th>Calificacion</th></tr>");
	$("#tablaDescripcion").append("<tr><td>Lectura Oral y Escrita</td><td>7</td><td>9</td><td>8</td><<td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>TIC'S</td><td>7</td><td>9</td><td>8</td><td>8</td></tr>");
	$("#tablaDescripcion").append("<tr><td>Algebra 1</td><td>8</td><td>9</td><td>10</td><td>9</td></tr>");

}