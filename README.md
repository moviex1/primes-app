# Primes app

If you want to execute run this app you should have docker installed on you machine

<h3>How to run app</h3>
Executes this commands to build image and then run container on port 8000
<pre>
docker build -t fhtagn .
docker run -p 8000:8000 --name fhtagn fhtagn
</pre>
When docker container will be running you can check this app using link
<a target="_blank" href="http://localhost:8000">http://localhost:8000</a>

<h3>How to clean</h3>
<pre>
docker container rm fhtagn
docker image rm fhtagn
</pre>
