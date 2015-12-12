	function Api() {
		this.get = function(uri) {
			var result;

			var x = new XMLHttpRequest();
			x.open("get", "/rest/" + uri);

			x.onreadystatechange = function() {
				if (x.readyState == 4) {
            		result = JSON.parse(x.responseText);
        		}
			}

			x.send(null);

			return result;
		};
		this.post = function() {

		};
		this.put = function() {

		};
	}