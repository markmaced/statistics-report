<?php
/*
Plugin Name: Statistics Report
Description: Adiciona o comando "wp statistics-report generate" no WP-CLI 
Version: 1.0
Author: Marcos Macedo
*/

if ( defined( 'WP_CLI' ) && WP_CLI ) {
    class Statistics_Report_Command {
        public function generate( $args, $assoc_args ) {
            global $wpdb;

            $limit = isset( $assoc_args['limit'] ) ? intval( $assoc_args['limit'] ) : -1;

            $results = $wpdb->get_results(
                "SELECT * FROM {$wpdb->prefix}statistics_data ORDER BY click_time DESC" . ( $limit > 0 ? " LIMIT $limit" : "" )
            );

            if ( ! empty( $results ) ) {
                foreach ( $results as $result ) {
                    WP_CLI::line( sprintf( "ID: %d, Click Time: %s", $result->id, $result->click_time ) );
                }
            } else {
                WP_CLI::line( "No click statistics found." );
            }
        }
    }

    WP_CLI::add_command( 'statistics-report', 'Statistics_Report_Command' );
}


?>