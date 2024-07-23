<section id="categories" class="categories site-content fixed">
  <div class="section-heading">
    <div>
      <h2 class="categories__title title">Готовые шаблоны</h2>
      <p class="categories__subtitle subtitle">С момента последнего тестирования мы обновили больше 2000
        строчек
        кода,
        но продукт еще можно тестировать и тестировать. Сейчас мы наполняем демо-сайт, здесь будет много
        различных
        примеров под разные ниши.
      </p>
    </div>
    <a href="#cards" class="categories__sticker scroll-anim-js">
      <span class="visually-hidden">Перейти к виджетам</span>
      <div class="sticker">
        <div class="categories__sticker-info" style="z-index: 5;">
          <svg xmlns="http://www.w3.org/2000/svg" style="z-index: 5;" fill="none" viewBox="0 0 35 35">
            <path fill="#000" d="M19.25 24.5h2.625a.875.875 0 1 1 0 1.75h-7a.875.875 0 1 1 0-1.75H17.5v-8.75h-2.625a.875.875 0 1 1 0-1.75h3.5c.483 0 .875.392.875.875V24.5ZM17.5 35C7.835 35 0 27.165 0 17.5S7.835 0 17.5 0 35 7.835 35 17.5 27.165 35 17.5 35Zm0-1.75c8.698 0 15.75-7.052 15.75-15.75S26.198 1.75 17.5 1.75 1.75 8.802 1.75 17.5 8.802 33.25 17.5 33.25Zm-.875-24.5h1.75c.483 0 .875.392.875.875v1.75a.875.875 0 0 1-.875.875h-1.75a.875.875 0 0 1-.875-.875v-1.75c0-.483.392-.875.875-.875Z" />
          </svg>
          <span style="z-index: 5;">Нажмите на квиз, чтобы пройти его демо-версию</span>
        </div>
      </div>
    </a>
  </div>

  <button class="btn-filter-mobile" type="button" onclick="toggleFilters()">
    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
      <path fill="#000" fill-rule="evenodd" d="M14.388 9.708a3.108 3.108 0 0 1 3.112 3.096 3.108 3.108 0 0 1-3.112 3.096c-1.717 0-3.114-1.389-3.114-3.096s1.397-3.096 3.114-3.096Zm0 1.5c-.89 0-1.614.716-1.614 1.596 0 .881.724 1.596 1.614 1.596.889 0 1.612-.715 1.612-1.596 0-.88-.723-1.596-1.612-1.596Zm-7.308.885a.75.75 0 0 1 0 1.5H.78a.75.75 0 0 1 0-1.5h6.3ZM3.113 0a3.109 3.109 0 0 1 3.113 3.097c0 1.707-1.396 3.095-3.113 3.095C1.397 6.192 0 4.804 0 3.097A3.11 3.11 0 0 1 3.113 0Zm0 1.5c-.889 0-1.613.716-1.613 1.597 0 .88.724 1.595 1.613 1.595.89 0 1.613-.715 1.613-1.595 0-.881-.723-1.597-1.613-1.597Zm13.078.9a.75.75 0 0 1 0 1.5h-6.3a.75.75 0 0 1 0-1.5h6.3Z" clip-rule="evenodd" />
    </svg>
    <p>Фильтры</p>
  </button>

  <?php dynamic_sidebar('categories-filter'); ?>
  <div class="categories__filters-list" name="filters">
    <div class="categories__filters-list-container" role="tablist">


      <div class="categories__filter-item filter-item all-categories js-filter-item active" role="tab" aria-selected="true" data-id="all">
        <label for="all" class="filter-item__label"><span>Все категории</span></label>
        <input id="all" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Все категории">
      </div>

      <div class="categories__filter-item filter-item js-filter-item" data-id="furniture" role="tab" aria-selected="false">
        <label for="furniture" class="filter-item__label"><span>Расчет стоимости мебели</span></label>
        <input id="furniture" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Расчет стоимости мебели">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="kitchen" role="tab">
        <label for="kitchen" class="filter-item__label"><span>Кухни на заказ</span></label>
        <input id="kitchen" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Кухни на заказ">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="health" role="tab">
        <label for="health" class="filter-item__label"><span>Питание и здоровье</span></label>
        <input id="health" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Питание и здоровье">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="tours" role="tab">
        <label for="tours" class="filter-item__label"><span>Подбор туров для турагентств</span></label>
        <input id="tours" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Подбор туров для турагентств">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="realty" role="tab">
        <label for="realty" class="filter-item__label"><span>Квизы по недвижимости</span></label>
        <input id="realty" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Квизы по недвижимости">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="courses" role="tab">
        <label for="courses" class="filter-item__label"><span>Подбор подходящих курсов</span></label>
        <input id="courses" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Подбор подходящих курсов">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="cars" role="tab">
        <label for="cars" class="filter-item__label"><span>Автоподбор</span></label>
        <input id="cars" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Автоподбор">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="interior" role="tab">
        <label for="interior" class="filter-item__label"><span>Дизайн интерьеров</span></label>
        <input id="interior" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Дизайн интерьеров">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>

      <div class="categories__filter-item filter-item js-filter-item" aria-selected="false" data-id="other" role="tab">
        <label for="other" class="filter-item__label"><span>Другие</span></label>
        <input id="other" class="filter-item__input visually-hidden" type="checkbox" name="category" value="Другие">
        <button class="filter-item__btn" type="button">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9.5" stroke="white"></circle>
            <path d="M13.823 13.9991C13.8004 13.9777 13.7783 13.9559 13.7563 13.9336L6.04048 6.10099C6.0268 6.0871 6.0134 6.07327 6 6.0592" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14.0002 6C13.9789 6.02298 13.9571 6.04572 13.935 6.06824L6.16737 13.9534C6.15369 13.9672 6.13983 13.9811 6.12598 13.9947" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/quize-cards') ?>


</section>