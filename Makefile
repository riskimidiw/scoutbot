SHELL:=/bin/bash

load_env:
	@export $(cat .env)

migrate: 
	@php index.php migration migrate

migration:
ifdef name
	@php index.php migration create $(name)
else
	@echo "[ERROR] : Required name"
	@echo "[USAGE] : make migration name=your_migration"
endif
