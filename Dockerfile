FROM python:3.10 as requirements-stage

WORKDIR /tmp

RUN pip install poetry

COPY ./pyproject.toml ./poetry.lock* /tmp/

RUN poetry export -f requirements.txt --output requirements.txt --without-hashes

FROM python:3.10

WORKDIR /estour_dw

COPY --from=requirements-stage /tmp/requirements.txt /estour_dw/requirements.txt

RUN pip install --no-cache-dir --upgrade -r /estour_dw/requirements.txt


COPY . /estour_dw

ENV POSTGRES_HOST=db
EXPOSE 8000

CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]