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

fclean : clean

re:
	fclean all

PHONY : all clean fclean re