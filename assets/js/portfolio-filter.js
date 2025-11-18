/**
 * Portfolio Filter Script
 * Handles portfolio filtering functionality
 */

(function() {
    'use strict';

    // Initialize isotope for portfolio filtering
    function initPortfolioFilter() {
        const filterItems = document.querySelectorAll('.filter-item');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        if (!filterItems || !portfolioItems) {
            return;
        }

        filterItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all filters
                filterItems.forEach(filter => {
                    filter.classList.remove('active');
                });

                // Add active class to clicked filter
                this.classList.add('active');

                // Get filter value
                const filterValue = this.getAttribute('data-filter');

                // Show/hide portfolio items
                portfolioItems.forEach(portfolio => {
                    if (filterValue === '*') {
                        portfolio.style.display = 'block';
                        setTimeout(() => {
                            portfolio.style.opacity = '1';
                        }, 10);
                    } else {
                        if (portfolio.classList.contains(filterValue.substring(1))) {
                            portfolio.style.display = 'block';
                            setTimeout(() => {
                                portfolio.style.opacity = '1';
                            }, 10);
                        } else {
                            portfolio.style.opacity = '0';
                            setTimeout(() => {
                                portfolio.style.display = 'none';
                            }, 300);
                        }
                    }
                });
            });
        });
    }

    // Run on document ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPortfolioFilter);
    } else {
        initPortfolioFilter();
    }
})();
