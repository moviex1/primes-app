# Primes app

If you want to execute run this app you should have docker installed on you machine

<h3>Commands to run app</h3>
<pre>
docker build -t fhtagn .
docker run -p 8000:8000 --name fhtagn fhtagn
</pre>

<h3>How to clean</h3>
<pre>
docker container rm fhtagn
docker image rm fhtagn
</pre>
