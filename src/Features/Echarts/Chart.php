<?php

namespace ConsoleTVs\Charts\Features\Echarts;

trait Chart
{
    /**
     * Show or hide the chart legend.
     *
     * @param boolean $legend
     * @return Self
     */
    public function displayLegend(bool $legend)
    {
        return $this->options([
            'legend' => [
                'show' => $legend
            ],
        ]);
    }

    /**
     * Show or hide the tooltip.
     *
     * @param boolean $tooltip
     * @return Self
     */
    public function tooltip(bool $tooltip)
    {
        return $this->options([
            'tooltip' => [
                'show' => $tooltip
            ]
        ]);
    }

    /**
     * Set the chart label.
     *
     * @param string $label
     * @return Self
     */
    public function label(string $label)
    {
        return $this->options([
            'yAxis' => [
                'name' => $label,
                'nameLocation' => 'middle'
            ]
        ]);
    }

    /**
     * Show the minimalistic
     *
     * @param boolean $minimalist
     * @return Self
     */
    public function minimalist(bool $minimalist = true)
    {
        $this->displayAxes(!$minimalist);
        $this->displayLegend(!$minimalist);

        return $this->options([
            'xAxis' => [
                'axisLabel' => [
                    'show' => !$minimalist
                ],
                'splitLine' => [
                    'show' => !$minimalist
                ]
            ],
            'yAxis' => [
                'axisLabel' => [
                    'show' => !$minimalist
                ],
                'splitLine' => [
                    'show' => !$minimalist
                ]
            ]
        ]);
    }

    /**
     * Display the chart axes.
     *
     * @param boolean $display
     * @return Self
     */
    public function displayAxes(bool $display)
    {
        return $this->options([
            'xAxis' => [
                'axisLine' => [
                    'show' => $display
                ],
                'axisTick' => [
                    'show' => $display
                ],
            ],
            'yAxis' => [
                'axisLine' => [
                    'show' => $display
                ],
                'axisTick' => [
                    'show' => $display
                ],
            ]
        ]);
    }

    /**
     * ALlow to export the chart.
     *
     * @return Self
     */
    public function export(bool $export = true, string $title = ' ')
    {
        return $this->options([
            'toolbox' => [
                'show' => true,
                'feature' => [
                    'saveAsImage' => [
                        'title' => $title
                    ]
                ]
            ],
        ]);
    }

    /**
     * Set the chart title.
     *
     * @param  string  $title
     * @param  integer $font_size
     * @param  string  $color
     * @param  boolean $bold
     * @param  string  $font_family
     * @return Self
     */
    public function title(
        string $title,
        int $font_size = 14,
        string $color = '#666',
        bool $bold = true,
        string $font_family = "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
    ) {
        return $this->options([
            'title' => [
                'show' => true,
                'text' => $title,
                'textStyle' => [
                    'fontFamily' => $font_family,
                    'fontSize' => $font_size,
                    'color' => $color,
                    'fontWeight' => $bold,
                ]
            ]
        ]);
    }
}