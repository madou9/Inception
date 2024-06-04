NAME = inception

COMPOSE = cd srcs && docker-compose -f compose.yml

all: $(NAME)

$(NAME): start

start:
	$(COMPOSE) up --build

down:
	$(COMPOSE) down

stop:
	$(COMPOSE) stop

clean :
	$(COMPOSE) down
	@docker system prune -a

fclean :
	@docker	stop $$(docker ps -qa)
	@docker system prune -af --volumes
	@docker	network prune --force

re:
	fclean all

PHONY : all clean fclean re