var fs         = require('fs'),
    sqlite3    = require('sqlite3').verbose(),
    db         = new sqlite3.Database("cities.db");
    
db.serialize(function () {
    db.run("CREATE TABLE IF NOT EXISTS `City` (id INTEGER PRIMARY KEY, name VARCHAR(128), pid INTEGER);");
	db.run("CREATE INDEX IF NOT EXISTS `name_index` ON `City` (`name` ASC)");
    var stmt = db.prepare("INSERT INTO City (`id`, `name`, `pid`) VALUES (?, ?, ?)");
    var cities = require("cities.json");
	//return console.log(cities);
    for (var i = 0; i < cities.length; i++) {
        var c = cities[i];
        stmt.run([c.id, c.name, c.pid || 0]);
    }
    stmt.finalize();
});
