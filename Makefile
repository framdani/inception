
all:
	cd srcs && docker-compose up --build -d

clean:
	cd srcs && docker-compose down --rmi all -v	
fclean: clean
	docker images -qa | xargs --no-run-if-empty docker rmi -f
re: fclean all
