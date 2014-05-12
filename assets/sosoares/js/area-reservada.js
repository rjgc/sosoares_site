$( document ).ready(function() {
	for (var i = 0; i < 7; i++) {
		var dable = new Dable();

		if (i == 0 && typeof arrayTodos != 'undefined' && arrayTodos instanceof Array) {
			dable.SetDataAsRows(arrayTodos);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable");
		}
		else if (i == 1 && typeof arrayPerfis != 'undefined' && arrayPerfis instanceof Array) {
			dable.SetDataAsRows(arrayPerfis);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable2");
		}
		else if (i == 2 && typeof arrayPormenores != 'undefined' && arrayPormenores instanceof Array) {
			dable.SetDataAsRows(arrayPormenores);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable3");
		}
		else if (i == 3 && typeof arrayCatalogos != 'undefined' && arrayCatalogos instanceof Array) {
			dable.SetDataAsRows(arrayCatalogos);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable4");
		}
		else if (i == 4 && typeof arrayEnsaios != 'undefined' && arrayEnsaios instanceof Array) {
			dable.SetDataAsRows(arrayEnsaios);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable5");
		}
		else if (i == 5 && typeof arrayFolhetos != 'undefined' && arrayFolhetos instanceof Array) {
			dable.SetDataAsRows(arrayFolhetos);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable6");
		}
		else if (i == 6 && typeof arrayFerragens != 'undefined' && arrayFerragens instanceof Array) {
			dable.SetDataAsRows(arrayFerragens);
			dable.SetColumnNames(columns);
			dable.BuildAll("DefaultDable7");
		}
	}
});